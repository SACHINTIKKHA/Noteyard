@extends('admin.layout')
@section('main')
 
            <div class="dashboard-content">
            <!-- Page Header -->
            <div class="page-header">
                <h1>Admin-Dashboard</h1>
                <p>Welcome {{session('name')}} email - {{session('email')}}.</p>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon primary">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <div class="stat-trend up">
                            <i class="bi bi-arrow-up"></i> 12%
                        </div>
                    </div>
                    <div class="stat-value" id="totalOrders">1,547</div>
                    <div class="stat-label">Total Orders Today</div>
                    <div class="stat-footer">
                        <i class="bi bi-clock"></i>
                        <span>Updated 5 mins ago</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon success">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="stat-trend up">
                            <i class="bi bi-arrow-up"></i> 8.5%
                        </div>
                    </div>
                    <div class="stat-value" id="totalRevenue">$24,580</div>
                    <div class="stat-label">Revenue Today</div>
                    <div class="stat-footer">
                        <i class="bi bi-graph-up"></i>
                        <span>vs $22,650 yesterday</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon warning">
                            <i class="bi bi-bicycle"></i>
                        </div>
                        <div class="stat-trend up">
                            <i class="bi bi-arrow-up"></i> 3.2%
                        </div>
                    </div>
                    <div class="stat-value" id="activeRiders">87</div>
                    <div class="stat-label">Active Riders</div>
                    <div class="stat-footer">
                        <i class="bi bi-geo-alt"></i>
                        <span>45 on delivery</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon info">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stat-trend up">
                            <i class="bi bi-arrow-up"></i> 0.3
                        </div>
                    </div>
                    <div class="stat-value">4.8</div>
                    <div class="stat-label">Average Rating</div>
                    <div class="stat-footer">
                        <i class="bi bi-chat-left-dots"></i>
                        <span>From 2,341 reviews</span>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3>Revenue Analytics</h3>
                            <div class="chart-filters">
                                <button class="filter-btn active">Day</button>
                                <button class="filter-btn">Week</button>
                                <button class="filter-btn">Month</button>
                                <button class="filter-btn">Year</button>
                            </div>
                        </div>
                        <canvas id="revenueChart" height="80"></canvas>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3>Order Status</h3>
                        </div>
                        <canvas id="orderStatusChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            
                </div>
            </div>
        </div>
    </main>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    