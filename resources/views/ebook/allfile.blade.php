@extends('ebook.layout')
@section('title')
Notepage
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')


<!-- Hero -->
<section class="notes-hero">
    <div class="container">
        <h1>Download <span>all Your Ebooks</span></h1>
        <p>Find your study materials quickly</p>

        <!-- Search -->
        <div class="search-box mt-4">
            <input type="text" class="form-control w-50 mx-auto" placeholder="Search notes...">
        </div>
    </div>
</section>

<!-- Categories -->
<div class="container text-center mt-4">
    <a href="allfile"><button class="btn btn-outline-light btn-primary category-btn">All</button></a>
    <a href="freefile"><button class="btn btn-outline-light category-btn">Free</button></a>
    <a href="paidfile"><button class="btn btn-outline-light category-btn">Paid</button></a>
</div>

<!-- Notes Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">📖 Popular eBooks</h2>
    <div class="row g-4">
        @foreach($notes as $files)

        <div class="col-md-4">
            <div class="book-card">
                <img src="{{ asset('storage/'.$files->file) }}" class="w-100">
                <div class="p-3">
                     
                    <p>{{$files->title}}</p>
                     <span title="{{$files->description}}"> {{ Str::limit($files->description, 2) }}</span>
                     <h5><span class="position-absolute top-0 end-0 m-2 badge bg-primary opacity-75">{{$files->filetype}}</span></h5>
                    <div class="d-flex justify-content-between align-items-center">
                   
    <a href="downloadto/{{$files->id}}" class="btn btn-gradient btn-sm">Download</a>
    
    <a href="{{'like/'.$files->id}}"><i class="bi {{DB::table('favourite')->where('notesid',$files->id)->where('userid',session('id'))->exists() ? 'bi-heart-fill text-danger':  'bi-heart text-danger'}}" style="cursor:pointer" ></i></a>
</div>
                </div>
            </div>
        </div>
@endforeach
{{$notes->links()}}
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

    .w-5.h-5{
        width:20px
    }
    </style>
