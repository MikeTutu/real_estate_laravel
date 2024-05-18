<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','phone','bio','profile_img','facebook','twitter','snapchat','instagram'];

    public function getDetails($user_id)
    {
        return Self::where('user_id',$user_id)->first();
    }

    public function saveDetails($user_id,$data)
    {
        Self::where('user_id',$user_id)->update($data);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
