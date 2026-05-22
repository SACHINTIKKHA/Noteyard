@extends('student.layout')


@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')



<!-- Hero Section -->
<section class="hero">
    <div>
        <h1>Download <span>Free eBooks</span></h1>
        <p>Notes, PDFs, Study Materials — All in One Place</p>
        <a href="#" class="btn btn-gradient mt-3">Browse Books</a>
    </div>
</section>

<!-- Books Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">📖 Popular eBooks</h2>
    <div class="row g-4">
        @foreach($file as $files)

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
        <!-- <div class="col-md-4">
            <div class="book-card">
                <img src="{{ asset('images/programming.jpg') }}" class="w-100">
                <div class="p-3">
                    <h5>Programming Guide</h5>
                    <p>Master coding concepts</p>
                    <a href="#" class="btn btn-gradient btn-sm">Download</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="book-card">
                <img src="{{ asset('images/civil.jpg') }}" class="w-100">
                <div class="p-3">
                    <h5>Exam Notes</h5>
                    <p>Important short notes</p>
                    <a href="#" class="btn btn-gradient btn-sm">Download</a>
                </div>
            </div>
        </div> -->

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection