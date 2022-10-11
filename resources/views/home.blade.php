
@extends('layouts.home')
@section('title')
Details Page
@endsection
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Jumlah Pegawai</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5 class="text-center"> {{$pegawai}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Total Obat</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5 class="text-center"> {{$obat}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Data Wilayah</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5 class="text-center"> {{$wilayah}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Data Tindakan</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                               <h5 class="text-center">{{$tindakan}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
         
                          
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Chart Pasien Perbulan
                            </div>
                            <div class="card-body"><canvas id="myChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Chart Tagihan Perbulan
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
         
            </div>
        </main>
    </div>
</div>
@endsection


</html>




