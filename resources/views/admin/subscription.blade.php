@extends('admin.layout')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-dark text-white text-center rounded-top-4">
                    <h4 class="mb-0">📁 Subscription File</h4>
                </div>

                <div class="card-body p-4">

                    <form action="{{url('subscribeddata')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- File Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter file name" required>
                            </div>

                            <!-- File Title -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter title" required>
                            </div>

                            <!-- File Upload -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload File</label>
                                <input type="file" name="file" class="form-control" onchange="showFileName(this)" required>
                                <small id="fileName" class="text-muted"></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Amount (₹)</label>
                                <input type="number" name="price" class="form-control" placeholder="Enter price" required>
                            </div>


                            <!-- Created At -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Validity</label>
                                <input type="number" name="validity" id="created_at" class="form-control"placeholder="Between [0-365]">
                            </div>

                        </div>

                        <!-- Submit -->
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection