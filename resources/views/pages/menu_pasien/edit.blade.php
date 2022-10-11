@extends('layouts.app')
@section('title')
Edit data Pasien
@endsection
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">Edit data Pasien</h3>
                <div class="container" style="padding-top:50px ;">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="form-title">Form Input Pasien</h4>
                                    <form action="{{route('menu_pasien.update',$item->id)}}" class="row g-3 needs-validation" novalidate method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">No KTP</label>
                                            <input type="text" name="NIK" class="form-control" id="validationCustom01" value="{{$item->NIK}}" required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Nama Pasien</label>
                                            <input type="text" name="nama_pasien" class="form-control" id="validationCustom02" value=" {{$item->nama_pasien}} " required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">No Handphone</label>
                                            <input type="text" name="no_phone" class="form-control" id="validationCustom02" value="{{$item->no_phone}}" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" id="validationCustom02" value=" {{$item->tanggal_lahir}} " required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom02" class="form-label"> Jenis Kelamin </label>
                                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                <option value="laki-laki">Laki laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Pegawai</label>
                                            <select class="form-select" name="pegawai_id" required class="form-control">
                                                <option required value="pegawai_id"> {{$item->user_tabel->name}} </option>
                                                @foreach ($user_item as $item)
                                                    <option value="{{$item->id}}">
                                                        {{$item->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom02" class="form-label">Keluhan</label>
                                            <input type="text" class="form-control" name="keluhan" id="keluhan" value=" {{$item->keluhan}} " required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Pilih Wilayah</label>
                                            <select class="form-select" name="wilayah_id" required class="form-control">
                                                <option required value="wilayah_id"> {{$item->masterwilayah_tabel->nama_wilayah}} </option>
                                                @foreach ($wilayah_item as $item)
                                                    <option value="{{$item->wilayah_id}}">
                                                        {{$item->nama_wilayah}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
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
