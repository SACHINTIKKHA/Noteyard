@extends('admin.layout')
@section('main')



        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                    <div>
                        <h1>Payment History</h1>
                        <p>List of all user's payment history.</p>
                    </div>
                </div>
            </div>

           <div class="row mb-4">

               <div class="table-card">
                <div class="table-header">
                    <h3>ALL PAYMENT</h3>
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
                                <th>USER ID</th>
                                <th>PLAN ID </th>
                                <th>UTR ID</th>
                                <th>DATE</th>
                                <th>AMOUNT</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                        <tr>
                            <td>
                                <div class="order-customer">
                                    
                                    <div class="customer-info">
                                        <h6>{{$d->id}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$d->userid}}</td>
                            <td>{{$d->planid}}</td>
                            <td>{{$d->utr}}</td>
                            <td>{{$d->date}}</td>
                            <td>{{$d->amount}}</td>
                            <td>{{$d->status}}</td>
                            <td>
                                <div class="action-buttons">
                                    <a  href="{{asset('storage/'.$d->image)}}"><button class="action-icon-btn"><i class="bi bi-eye"></i></button></a>
                                    <a href="{{'paymentapprove/'.$d->id}}"><button class="action-icon-btn"><i class="fa-solid fa-square-check fa-lg" style="color: rgb(99, 144, 236);"></i></button></a>
                                    <a href="{{'paymentdeny/'.$d->id}}"><button class="action-icon-btn"><i class="fa-solid fa-circle-xmark fa-lg" style="color: rgb(99, 144, 236);"></i></button></a>
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
    