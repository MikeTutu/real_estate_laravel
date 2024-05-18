@extends('layouts.user_app')

@section('title','Profile - Dashboard')

@section('header')
<x-user.header/>
@endsection

@section('body')
<div class="container">
    <x-user.navigation nav="profile"/>
    <div class="profile-content">
        <div class="row dashboard-info">
            <div class="col-lg-9">
                <div class="card dash-cards">
                    <div class="card-header">
                        <h4>Profile Details</h4>
                    </div>
                    <div class="card-body">
                            @if(session()->has('error_profile'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach (session('error_profile') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('success_profile'))
                                <div class="alert alert-success">
                                    {{ session('success_profile') }}
                                </div>
                            @endif
                        <form method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="profile-photo">
                                <div class="profile-img">
                                    <div class="settings-upload-img">
                                        <img
                                        id="profile_image" 
                                        @if($user_details->profile_img)
                                        src="{{$user_details->profile_img}}" 
                                        @else
                                        src="assets/img/profile-img.jpg" 
                                        @endif
                                        alt="profile">
                                    </div>
                                    <div class="settings-upload-btn">
                                        <input type="file" accept="image/*" name="image"
                                            class="hide-input image-upload" id="file">
                                        <label for="file" class="file-upload">Upload New photo</label>
                                    </div>
                                    <span>Max file size: 5 MB</span>
                                </div>
                                <div class="profile-img-del"><i
                                        class="feather-trash-2"></i></div>
                            </div>
                            
                            <div class="profile-form">
                                <div class="form-set">
                                    <label class="col-form-label">Your Full Name</label>
                                    <div class="pass-group group-img">
                                        <span class="lock-icon"><i class="feather-user"></i></span>
                                        <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set">
                                            <label class="col-form-label">Phone Number</label>
                                            <div class="pass-group group-img">
                                                <span class="lock-icon"><i
                                                        class="feather-phone-call"></i></span>
                                                <x-text-input id="phone" name="phone" type="tel" class="form-control" :value="old('phone', $user_details->phone)" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set">
                                            <label class="col-form-label">Email Address</label>
                                            <div class="group-img">
                                                <i class="feather-mail"></i>
                                                <input id="email" type="email" class="form-control"
                                                    value="{{ $user->email}}" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-set">
                                    <label class="col-form-label">Bio</label>
                                    <div class="pass-group group-img">
                                        <textarea rows="4"
                                            class="form-control" name="bio">{{$user_details->bio}}</textarea>
                                    </div>
                                </div>
                                <div class="row socialmedia-info">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set">
                                            <label class="col-form-label">Facebook</label>
                                            <div class="pass-group group-img">
                                                <span class="lock-icon"><i
                                                        class="fab fa-facebook-f"></i></span>
                                                <input type="text" class="form-control" name="facebook"
                                                    value="{{$user_details->facebook}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set">
                                            <label class="col-form-label">Twitter</label>
                                            <div class="pass-group group-img">
                                                <span class="lock-icon"><i class="fa-brands fa-x-twitter"></i></span>
                                                <input type="text" class="form-control" name="twitter"
                                                    value="{{$user_details->twitter}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row socialmedia-info">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set formlast-input">
                                            <label class="col-form-label">Snapchat</label>
                                            <div class="pass-group group-img">
                                                <span class="lock-icon"><i
                                                        class="fa-brands fa-snapchat"></i></span>
                                                <input type="text" class="form-control" name="snapchat"
                                                    value="{{$user_details->snapchat}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-set formlast-input">
                                            <label class="col-form-label">Instagram</label>
                                            <div class="pass-group group-img">
                                                <span class="lock-icon"><i
                                                        class="fab fa-instagram"></i></span>
                                                <input type="text" class="form-control" name="instagram"
                                                    value="{{$user_details->instagram}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary mt-2" type="submit"> save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="profile-sidebar">
                    <div class="card">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST" action={{route('password.update')}}>
                                {{-- @method('PUT') --}}
                                @csrf
                                <div class="form-set">
                                    <label class="col-form-label">Current Password</label>
                                    <div class="pass-group group-img">
                                        <span class="lock-icon"><i class="feather-lock"></i></span>
                                        <input type="password" class="form-control pass-input"
                                            placeholder="Password" name="current_password" required>
                                    </div>
                                </div>
                                <div class="form-set">
                                    <label class="col-form-label">New Password</label>
                                    <div class="pass-group group-img">
                                        <span class="lock-icon"><i class="feather-lock"></i></span>
                                        <input type="password" class="form-control pass-input" name="password" required>
                                        <span class="toggle-password feather-eye-off"></span>
                                    </div>
                                </div>
                                <div class="form-set">
                                    <label class="col-form-label">Confirm New Password</label>
                                    <div class="pass-group group-img">
                                        <span class="lock-icon"><i class="feather-lock"></i></span>
                                        <input type="password" class="form-control pass-input" name="password_confirmation" required>
                                        <span class="toggle-password feather-eye-off"></span>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit"> Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
$profileImg = app(\App\Models\UserDetails::class)->where('user_id', Auth::id())->value('profile_img');
@endphp
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.profile-img-del').on('click', function() {
            console.log('happy')
            // Remove the uploaded image from the input field
            $('.image-upload').val('');
            
            // Replace the profile image with the one from the database
            var profileImgUrl = '{{ $profileImg }}';
            console.log(profileImgUrl)
            $('.settings-upload-img>img').attr('src', profileImgUrl);
        });
    });
</script>
@endsection