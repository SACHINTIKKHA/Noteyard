@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection
@section('main')


        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                    <div>
                        <h1>Purchase History</h1>
                        
                    </div>
                   
                </div>
            </div>

           <div class="row mb-4">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                        <div class="filter-card">
                            <div class="filter-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="filter-info">
                                <h3 id="totalCustomers">10</h3>
                                <p>Total Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                        <div class="filter-card">
                            <div class="filter-icon" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="filter-info">
                                <h3 id="activeCustomers">6</h3>
                                <p>Active Today</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                        <div class="filter-card">
                            <div class="filter-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="filter-info">
                                <h3 id="vipCustomers">4</h3>
                                <p>VIP Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                        <div class="filter-card">
                            <div class="filter-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="filter-info">
                                <h3 id="avgSpend">$887.12</h3>
                                <p>Avg Spend</p>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <th>PLAN ID</th>
                                <th>TITLE </th>
                                <th>AMOUNT </th>
                                <th>VALIDITY</th>
                                <th>DATE-OF-PURCHASE</th>
                                <th>LEFT DAYS</th>
                                <th>UTR</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fetch as $d)
                        <tr>
                            <td>
                                <div class="order-customer">
                                    
                                    <div class="customer-info">
                                        <h6>{{$d->id}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$d->title}}</td>
                            <td>{{$d->amount}}</td>
                            <td>{{$d->validity}}</td>
                            <td>{{$d->date}}</td>
                            <td>{{$d->leftdays}}</td>
                            <td>{{$d->utr}}</td>
                            <td>{{$d->status}}</td>
                            
                            
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
    