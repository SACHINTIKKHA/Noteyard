@extends('admin.layout')
@section('main')
<section class="register-section">
    <div class="register-card">

        <h2 class="text-center mb-4">📝 Student Registration</h2>

        <form action="newuser" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="First Name" name="first">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Last Name" name="last">
            </div>
             <div class="mb-3">
                <input type="text" class="form-control" placeholder="Father Name" name="father">
            </div>
             <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mother Name" name="mother">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Contact Number" name="contact">
            </div>
            <div class="row">
                <div class=" mb-3">
                    <input type="date" class="form-control" name="dob">
                </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address" name="email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <button class="btn btn-gradient w-100">Register</button>

        </form>

        <p class="text-center mt-3">
            Already have an account? 
            <a href="#" class="text-info">Login</a>
        </p>

    </div>
</section>

@endsection