@extends('layout')
@section('title')
Student-LoginPage
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Login Section -->
<section class="login-section">
    <div class="login-card text-center">

        <h2 class="mb-4">🔐 Student Login</h2>

        <form action="studentlogindata" method="post">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter Email"name='email'>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Enter Password"name='password'>
            </div>

            <button class="btn btn-gradient w-100">Login</button>
        </form>

        <p class="mt-3">
            Don't have an account? 
            <a href="#" class="text-info">Register</a>
        </p>

    </div>
</section>
@endsection