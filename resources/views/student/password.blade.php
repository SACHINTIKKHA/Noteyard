@extends('student.layout')

@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="password-box shadow-lg p-3" style="width: 380px; border-radius:16px;">

        <!-- SEND OTP FORM -->
        <form action="{{ url('otp') }}" method="POST">
    @csrf
           

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label small text-light">Enter Your Email</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-envelope"></i>
                    </span>

                    <input type="email"
                           name="email"
                           class="form-control form-control-sm"
                           placeholder="Enter your email">
                </div>
            </div>

            <!-- Send OTP -->
            <div class="d-grid mb-4">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-paper-plane"></i>
                    Send OTP
                </button>
            </div>
        </form>


        <!-- UPDATE PASSWORD FORM -->
        <form action="{{ url('enterotp') }}" method="POST">
            @csrf

            <!-- OTP -->
            <div class="mb-3">
                <label class="form-label small text-light">Enter OTP</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-shield-halved"></i>
                    </span>

                    <input type="text"
                           name="otp"
                           class="form-control form-control-sm"
                           placeholder="Enter OTP">
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label small text-light">New Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-lock"></i>
                    </span>

                    <input type="password"
                           name="password"
                           class="form-control form-control-sm"
                           placeholder="New password">
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label class="form-label small text-light">Confirm Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-key"></i>
                    </span>

                    <input type="password"
                           name="cpassword"
                           class="form-control form-control-sm"
                           placeholder="Confirm password">
                </div>
            </div>

            <!-- Update -->
            <div class="d-grid">
                <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa-solid fa-check"></i>
                    Update Password
                </button>
            </div>

        </form>

    </div>

</div>

@endsection