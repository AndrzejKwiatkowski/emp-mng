@extends('layouts.app')
@section('content')
<?php
$user->userProfile->user_id == Auth::id() ? $disabled = '' : $disabled = 'disabled'
?>


<link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
<div class="container">
    <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                    <div class="user-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                    </div>
                    <h5 class="user-name">{{ $user->name }}</h5>
                    <h6 class="user-email">{{ $user->email }}</h6>
                </div>
                <div class="about">
                    <h5>About</h5>
                    <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <form action="{{ route('update.user.profile') }}" method="POST">
            @csrf
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name" {{ $disabled }} value="{{ $user->userProfile->first_name ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name" {{ $disabled }} value="{{ $user->userProfile->last_name ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" {{ $disabled }} value="{{ $user->userProfile->phone ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="brithday">Brithday</label>
                        <input type="date" class="form-control" id="brithday" name="brith_day" placeholder="Enter brithday date" {{ $disabled }} value="{{ $user->userProfile->brith_day ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="brithday">Job title</label>
                        <input type="text" class="form-control" id="jobTitle" name="job_title" placeholder="Enter job title" {{ $disabled }} value="{{ $user->userProfile->job_title ?? null}}">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="sTate">Country</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" {{ $disabled }} value="{{ $user->userProfile->country ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="Street">Street</label>
                        <input type="name" class="form-control" id="street" name="street" placeholder="Enter Street" {{ $disabled }} value="{{ $user->userProfile->street ?? null}}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="name" class="form-control" id="city" name="city" placeholder="Enter City" {{ $disabled }} value="{{ $user->userProfile->city ?? null}}">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="post">Post Code</label>
                        <input type="text" pattern="[0-9]{2}[-][0-9]{3}" class="form-control" id="post" name="post_code" placeholder="Post Code" {{ $disabled }} value="{{ $user->userProfile->post_code ?? null}}">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        @if ($user->userProfile->user_id == Auth::id())
                        <button type="submit" id="submit" name="submit" class="btn btn-outline btn-primary">Save</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    @endsection

    <script type="text/javascript">
    // var test = "{{$user->userProfile->last_name}}";
    //     alert(test)
    </script>
