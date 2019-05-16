@extends('layouts.app')
@section('header')
<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Trafico</h5>
                    <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Desde el ultimo mes</span>
                </p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Nuevos usuarios</h5>
                    <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Desde el ultimmo mes</span>
                </p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Nuevos micros</h5>
                    <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                    </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Desde el ultimo mes</span>
                </p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                    </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow border-0">
                <div id="map-canvas" class="map-canvas" data-lat="40.748817" data-lng="-73.985428" style="height: 600px;"></div>
            </div>
        </div>
    </div>

@endsection

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>