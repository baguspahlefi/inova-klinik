@extends('layouts.app')
@section('title')
Tambah Tindakan
@endsection
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">Tambah Tindakan</h3>
                <div class="container" style="padding-top:50px ;">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="form-title">Form Input Tindakan</h4>
                                    <form action="{{route('master_tindakan.store')}}" method="POST">
                                        @csrf
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Nama Tindakan</label>
                                            <input type="text" name="nama_tindakan" class="form-control" id="validationCustom01" value="" required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Tarif</label>
                                            <input type="text" name="tarif" class="form-control" id="validationCustom02" value="" required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-12 py-4">
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
</html>
