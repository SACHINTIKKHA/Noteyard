@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')
<div class="plan-active-wrapper">
    
    <div class="plan-card">
        
        <div class="success-icon">
            ✓
        </div>

        <h1>Plan Already Active</h1>

        <p>
            Your subscription is currently active and running successfully.
            You don't need to make another payment right now.
        </p>

        <div class="plan-buttons">
           

            <a href="{{ url('activatedplans') }}" class="plans-btn">
                Current Plan
            </a>
        </div>

    </div>

</div>

@endsection