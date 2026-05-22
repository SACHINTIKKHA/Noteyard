@extends('admin.layout')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-dark text-white text-center rounded-top-4">
                    <h4 class="mb-0">📁 Upload New File</h4>
                </div>

                <div class="card-body p-4">

                    <form action="filedata" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- File Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">File Name</label>
                                <input type="text" class="form-control" required  value="{{$uniq}}"readonly>
                                <input type="hidden" name="name" class="form-control" required  value="{{$uniq}}"readonly>

                            </div>

                            <!-- File Title -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">File Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                            </div>

                            <!-- Description -->
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Write something..."></textarea>
                            </div>

                            <!-- File Upload -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload File</label>
                                <input type="file" name="file" class="form-control" onchange="showFileName(this)" required>
                                <small id="fileName" class="text-muted"></small>
                            </div>
                    
                             <div class="col-md-6 mb-3">
                            <label class="form-label">Choose Plan</label>
                            <select name="plan" class="form-control custom-select-ui" required>
                                <option value=""selected disabled>-- Select Plan --</option>
                                <option value="free">Free</option>
                                <option value="subscription">Subscription</option>
                            </select>
                        </div>

                        </div>

                        <!-- Submit -->
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">
                                🚀 Upload File
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection