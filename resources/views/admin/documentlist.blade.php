@extends('admin.layout')
@section('main')


        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                    <div>
                        <h1>Student List</h1>
                        <p>Welcome student Now you start you career.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="adduser" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add User
                        </a>
                    </div>
                </div>
            </div>

           <div class="row mb-4">
               <div class="table-card">
                <div class="table-header">
                    <h3>All Student</h3>
                    <div class="table-actions">
                        <button class="filter-btn">
                            <i class="bi bi-funnel"></i> Filter
                        </button>
                        <button class="filter-btn">
                            <i class="bi bi-download"></i> Export
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>FILE NAME</th>
                                <th>TITLE</th>
                                <th>FILE DESCRIPTION </th>
                                <th>FILE </th>
                                <th>FILE TYPE</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($var as $d)
                        <tr>
                            
                            <td>{{$d->name}}</td>
                            <td>{{$d->title}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->file}}</td>
                            <td>{{$d->filetype}}</td>
                            <td>{{$d->createdat}}</td>
                            <td>{{$d->updatedat}}</td>
                            
                            <td>
                                <div class="action-buttons">
                                    <button class="action-icon-btn"><i class="bi bi-eye"></i></button>
                                    <button class="action-icon-btn"><i class="bi bi-pencil"></i></button>
                                    <button class="action-icon-btn"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                            @endforeach
                        </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
           
        </div>
        @endsection
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    