@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection
@section('main')


<!-- Books Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">📖 Book Lover</h2>
    <div class="row g-4">
        @foreach($fav as $files)

        <div class="col-md-4">
            <div class="book-card">
                <img src="{{ asset('storage/'.$files->file) }}" class="w-100">
                <div class="p-3">
                    <p>{{$files->title}}</p>
                    <h5>{{$files->description}}</h5>
                   <div class="d-flex justify-content-between align-items-center">
    <a href="downloadto/{{$files->id}}" class="btn btn-gradient btn-sm">Download</a>
    
    <a href="{{'like/'.$files->id}}"><i class="bi bi-heart-fill text-danger " style="cursor:pointer"></i></a>
</div>
                </div>
            </div>
        </div>
@endforeach
</div>
</div>
@endsection