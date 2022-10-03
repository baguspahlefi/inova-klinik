@extends('layouts.app')
@section('title')
Tindakan Dan Obat Pasien
@endsection
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">Tindakan Dan Obat Pasien</h3>
                <div class="container" style="padding-top:50px ;">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="form-title">Form Tindakan Dan Obat</h4>
                                    <form action="{{route('menu_tindakan_dan_obat.update',$item->tdo_id)}}" class="row g-3 needs-validation" novalidate method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">No KTP</label>
                                            <input readonly="readonly" type="text" class="form-control" id="exampleFormControlInput1" name="NIK" value="{{$item->NIK}}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Nama Pasien</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_pasien" value="{{$item->nama_pasien}}" readonly="readonly">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">No HP</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="no_phone" value="{{$item->no_phone}}" readonly="readonly">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir" value="{{$item->tanggal_lahir}}" readonly="readonly">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="jenis_kelamin" value="{{$item->jenis_kelamin}}" readonly="readonly">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Keluhan</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="keluhan" value="{{$item->keluhan}}" readonly="readonly">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Pegawai</label>
                                            <select name="pegawai_id" required class="form-select" readonly="readonly">
                                                <option required value=" {{$item->pegawai_id}} "> {{$item->user_tabel->name}} </option>
                                                
                                                    <option value="{{$item->pegawai_id}}">
                                                        {{$item->wilayah_}}
                                                    </option>
                                               
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Wilayah</label>
                                            <select name="wilayah_id" required class="form-select" readonly="readonly">
                                                <option required value=" {{$item->wilayah_id}} "> {{$item->masterwilayah_tabel->nama_wilayah}} </option>    
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Jenis Tindakan</label>
                                            <select name="tindakan_id" required class="form-select">
                                                <option required value="tindakan_id">Pilih Jenis Tindakan</option>
                                                @foreach ($tindakan_item as $item)
                                                    <option value="{{$item->tindakan_id}}">
                                                        {{$item->nama_tindakan}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Jenis Obat</label>
                                            <select name="obat_id" required class="form-select">
                                                <option required value="obat_id">Pilih Jenis Obat</option>
                                                @foreach ($obat_item as $item)
                                                    <option value="{{$item->obat_id}}">
                                                        {{$item->nama_obat}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Status Tindakan</label>
                                            <select class="form-select" name="status_tindakan" id="satuan">
                                                <option selected> {{$item->status_tindakan}} </option>
                                                <option value="sudah">Sudah</option>
                                                <option value="belum">Belum</option>

                                            </select>
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
