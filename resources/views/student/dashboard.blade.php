@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')
<div class="profile-wrapper">

    
    <div class="profile-card">
        <!-- LEFT: IMAGE SECTION -->
        <div class="profile-left">
             <img src="{{ asset('storage/' . (session('image') ?? 'uploads/default.jpg')) }}"  alt="Profile Image" class="profile-img">
            <form action="/image/{{session('id')}}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="file" name="image"id="imageUpload"id="image">
            

            <button type="submit" class="upload-btn">Change Image</button>
            </form>
        </div>

        <!-- RIGHT: FORM SECTION -->
        <div class="profile-right">

            <h2>Edit Profile</h2>

            <form action="updatenew/{{session('id')}}" method="POST">
                @csrf

                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="first" value="{{ session('name') }}">
                </div>

                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="last" value="{{ session('last') }}">
                </div>

                <div class="input-group">
                    <label>Father</label>
                    <input type="text" name="father" value="{{ session('father') }}">
                </div>
                <div class="input-group">
                    <label>Mother Name</label>
                    <input type="text" name="mother" value="{{ session('mother') }}">
                </div>

                <div class="input-group">
                    <label>Contact</label>
                    <input type="text" name="contact" value="{{ session('con') }}" disabled class="opacity-50">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="contact" value="{{ session('email') }}" disabled class="opacity-50">
                </div>

                <button type="submit" class="save-btn">Save Changes</button>
            </form>

        </div>

    </div>

</div>
@endsection