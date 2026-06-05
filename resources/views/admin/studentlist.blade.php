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
                                <th>ID</th>
                                <th>First </th>
                                <th>Last </th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Date-Of-Birth</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data1 as $d)
                        <tr>
                            <td>
                                <div class="order-customer">
                                    
                                    <div class="customer-info">
                                        <h6>{{$d->id}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$d->first}}</td>
                            <td>{{$d->last}}</td>
                            <td>{{$d->father}}</td>
                            <td>{{$d->mother}}</td>
                            <td>{{$d->dob}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->contact}}</td>
                            
                            <td>
                                <div class="action-buttons">
                                    <a href="{{'studentedit/'.$d->id}}"><button class="action-icon-btn"><i class="bi bi-pencil"></i></button></a>
                                    <a href="{{'studentdel/'.$d->id}}"><button class="action-icon-btn"><i class="bi bi-trash"></i></button></a>
                                </div>
                            </td>
                            @endforeach
                        </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
           
        </div>
    </main>
    @endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    