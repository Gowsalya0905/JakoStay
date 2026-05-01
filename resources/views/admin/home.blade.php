@extends('admin.layouts.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-muted mb-0">Welcome back, Admin 👋</p>
        </div>
        <button class="btn btn-warning text-white px-4 rounded-3">+ Add Booking</button>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Rooms</p>
                        <h3 class="fw-bold mb-0">120</h3>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-door-open-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Bookings</p>
                        <h3 class="fw-bold mb-0">84</h3>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Guests</p>
                        <h3 class="fw-bold mb-0">52</h3>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Revenue</p>
                        <h3 class="fw-bold mb-0">₹45,000</h3>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-card">
        <h5 class="fw-bold mb-3">Recent Bookings</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Guest</th>
                        <th>Room</th>
                        <th>Status</th>
                        <th>Check-in</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#BK001</td>
                        <td>Arun Kumar</td>
                        <td>Deluxe 201</td>
                        <td><span class="badge-status status-confirmed">Confirmed</span></td>
                        <td>05 Apr 2026</td>
                    </tr>
                    <tr>
                        <td>#BK002</td>
                        <td>Priya S</td>
                        <td>Suite 305</td>
                        <td><span class="badge-status status-pending">Pending</span></td>
                        <td>06 Apr 2026</td>
                    </tr>
                    <tr>
                        <td>#BK003</td>
                        <td>Rahul M</td>
                        <td>Standard 102</td>
                        <td><span class="badge-status status-cancelled">Cancelled</span></td>
                        <td>07 Apr 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
