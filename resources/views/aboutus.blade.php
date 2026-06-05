@extends('layout')
@section('title')
AboutUs
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')

<!-- Hero -->
<section class="about-hero">
    <div class="container">
        <h1>About <span>eBookHub</span></h1>
        <p>Your one-stop platform for free learning resources</p>
    </div>
</section>

<!-- About Content -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2>Who We Are</h2>
                <p>
                    Noteyard is a platform designed for students and learners to access
                    high-quality notes, PDFs, and study materials for free.
                </p>
                <p>
                    Our mission is to make education accessible to everyone, anywhere.
                </p>
            </div>

            <div class="col-md-6">
                <img src="https://source.unsplash.com/500x350/?education" class="img-fluid rounded">
            </div>

        </div>
    </div>
</section>

<!-- Features -->
<section class="section">
    <div class="container text-center">
        <h2 class="mb-5">Why Choose Us?</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="info-card">
                    <h4>📚 Free Resources</h4>
                    <p>Download unlimited notes and eBooks at no cost.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4>⚡ Easy Access</h4>
                    <p>Simple and fast interface for better experience.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4>🎯 Quality Content</h4>
                    <p>Carefully selected study material for students and updated.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection