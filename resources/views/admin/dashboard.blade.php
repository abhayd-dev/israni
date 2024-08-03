
<style>
    body{
       background:  rgb(229 160 50 / 22%) !important;
        color:black !important;
    }
    h1.h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.card {
    border: 0;
    border-radius: 0.5rem;
    overflow: hidden;
   
}

.card-header {
    background: #007bff;
    color: #fff;
}

.card-body {
    padding: 1.5rem;
}

.card-footer {
    background: #f8f9fa;
    text-align: right;
}

.card-icon {
    font-size: 2rem;
    margin-right: 0.5rem;
}
.bg-gradient {
        background: linear-gradient(135deg, rgb(8, 207, 161), rgb(241, 3, 249));
        
    }
    .card-body i {
        color: #fff;
        height: 200px;
        
    }
    .btn-light {
        background-color: #fff;
        border: none;
        color: #333;
    }
    .btn-light:hover {
        background-color: #f0f0f0;
    }
</style>
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Dashboard Header -->
        <div class="col-12 mb-4">
            <h1 class="h2">Welcome to the Israni Photography & Films Admin Panel</h1>
            <p class="lead">Manage and monitor all aspects of your photography and films from this central dashboard.</p>
        </div>

        <!-- Statistics Cards -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card bg-gradient text-white shadow-lg">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-3">
                            <i class="fa fa-camera fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Total Photos</h5>
                            <h2 class="card-text">500</h2>
                            <p class="text-light">In the gallery</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light text-dark d-block mt-3">View Photos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card bg-gradient text-white shadow-lg">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-3">
                            <i class="fa fa-video fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Total Videos</h5>
                            <h2 class="card-text">120</h2>
                            <p class="text-light">In the collection</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light text-dark d-block mt-3">View Videos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card bg-gradient text-white shadow-lg">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-3">
                            <i class="fa fa-calendar-alt fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Upcoming Events</h5>
                            <h2 class="card-text">8</h2>
                            <p class="text-light">Scheduled events</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light text-dark d-block mt-3">View Events</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card bg-gradient text-white shadow-lg">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-3">
                            <i class="fa fa-envelope fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Pending Inquiries</h5>
                            <h2 class="card-text">15</h2>
                            <p class="text-light">Awaiting response</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light text-dark d-block mt-3">View Inquiries</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Recent Activity -->
    <div class="row">
        <div class="col-12">
            <h3 class="h4">Recent Activity</h3>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">New Photo Uploaded</h5>
                        <small class="text-muted">3 mins ago</small>
                    </div>
                    <p class="mb-1">A new photo has been uploaded to the gallery.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Event Scheduled</h5>
                        <small class="text-muted">1 hour ago</small>
                    </div>
                    <p class="mb-1">An upcoming event has been scheduled for next week.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">New Video Added</h5>
                        <small class="text-muted">2 hours ago</small>
                    </div>
                    <p class="mb-1">A new video has been added to the collection.</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="h4">Quick Actions</h3>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card bg-primary text-white shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Upload Photo</h5>
                            <p class="card-text">Add new photos to the gallery.</p>
                            <a href="#" class="btn btn-light">Upload</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card bg-success text-white shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Add Video</h5>
                            <p class="card-text">Upload and manage videos.</p>
                            <a href="#" class="btn btn-light">Add Video</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card bg-warning text-white shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Schedule Event</h5>
                            <p class="card-text">Plan and manage upcoming events.</p>
                            <a href="#" class="btn btn-light">Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
