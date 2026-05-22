
@extends('ebook.layout')
@section('title')
Ebook
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')


<!-- Hero -->
<section class="notes-hero">
    <div class="container">
        <h1>Download <span>Your Books</span></h1>
        <p>Find your study materials quickly</p>

        <!-- Search -->
        <div class="search-box mt-4">
            <input type="text" class="form-control w-50 mx-auto" placeholder="Search notes...">
        </div>
    </div>
</section>

<!-- Categories -->
<div class="container text-center mt-4">
    <a href="allfile"><button class="btn btn-outline-light category-btn">All</button></a>
    <a href="freefile"><button class="btn btn-outline-light category-btn">Free</button></a>
    <a href="paidfile"><button class="btn btn-outline-light category-btn">Paid</button></a>
    
</div>


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>