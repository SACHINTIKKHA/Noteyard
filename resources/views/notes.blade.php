@extends('layout')
@section('title')
Noteyard
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')


<!-- Hero -->
<section class="notes-hero">
    <div class="container">
        <h1>Download <span>Free Notes</span></h1>
        <p>Find your study materials quickly</p>

        <!-- Search -->
        <div class="search-box mt-4">
            <input type="text" class="form-control w-50 mx-auto" placeholder="Search notes...">
        </div>
    </div>
</section>

<!-- Categories -->
<div class="container text-center mt-4">
    <button class="btn btn-outline-light category-btn">All</button>
    <button class="btn btn-outline-light category-btn">Programming</button>
    <button class="btn btn-outline-light category-btn">Web Dev</button>
    <button class="btn btn-outline-light category-btn">Database</button>
</div>

<!-- Notes Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">📖 Popular eBooks</h2>
    <div class="row g-4">
        @foreach($data as $files)

        <div class="col-md-4">
            <div class="book-card">
                <img src="{{ asset('storage/'.$files->file) }}" class="w-100">
                <div class="p-3">
                    <h5>{{$files->filetype}}</h5>
                    <p>{{$files->title}}</p>
                    <div class="d-flex justify-content-between align-items-center">
    <a href="downloadto/{{$files->id}}" class="btn btn-gradient btn-sm">Download</a>
    
    <a href="{{'like/'.$files->id}}"><i class="bi bi-heart fs-5 text-danger" style="cursor:pointer"></i></a>
</div>
                </div>
            </div>
        </div>
@endforeach
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
