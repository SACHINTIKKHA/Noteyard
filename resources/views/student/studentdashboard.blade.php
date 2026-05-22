@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')



        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Page Header -->
            <div class="page-header">
                <h1>Student-Dashboard Overview</h1>
                <p>Welcome {{ session('name') }} {{ session('last') }} .</p>
            </div>

           
    </main>
    @endsection
    

