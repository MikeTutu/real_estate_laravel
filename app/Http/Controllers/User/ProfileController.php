<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use App\Services\ValidationService;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    protected $userDetails;
    protected $validation;
    public function __construct(UserDetails $userDetails, ValidationService $validation)
    {
        $this->userDetails = $userDetails;
        $this->validation = $validation;
    }
    public function index(Request $request)
    {
        return view('pages.user.profile',[
            'user' => $request->user(),
            'user_details'=>$this->userDetails->getDetails($request->user()->id)
        ]);
    }

    public function updateProfile(Request $request)
    {
        Log::info($request->all());
        $user = Auth::user();

        $validator = $this->validation->validatorForUserProfile($request->all());
        if($validator->fails())
        {
            return redirect()->back()->with('error_profile',$validator->errors()->all());
        }

        $user->name = $request->name;
        //$user->email = $request->email;
        $user->save();

        
        $user_details = new UserDetails();
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('profile_images'), $imageName);
            $user_details->profile_img = 'profile_images/'.$imageName;
        }
        $user_details->facebook = $request->facebook;
        $user_details->twitter = $request->twitter;
        $user_details->snapchat = $request->snapchat;
        $user_details->instagram = $request->instagram;
        $data=[
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'snapchat' => $request->snapchat,
            'instagram'=> $request->instagram,
            'bio'=> $request->bio
        ];
        if($request->hasFile('image')){
            $data['profile_img']='profile_images/'.$imageName;
        }

        $this->userDetails->saveDetails($user->id,$data);
        return redirect()->back()->with(['success_profile'=>'Profile updated successfully']);
    }

    public function paswordUpdate(Request $request)
    {
        Log::info($request->all());
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) { 
            return redirect()->back()->withErrors(['error' => 'Current password invalid']);
        }

        $validator = $this->validation->validatorForUpdatePassowrd($request->all());

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user->password = Hash::make($request->new_password);
        //$user->save();
        return redirect()->back()->with(['success'=>'Password updated successfully']);
    }
}
