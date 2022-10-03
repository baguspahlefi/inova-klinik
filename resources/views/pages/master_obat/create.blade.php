@extends('layouts.app')
@section('title')
Tambah Obat
@endsection
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">Input Obat</h3>
                <div class="container" style="padding-top:50px ;">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="form-title">Form Input Obat</h4>
                                    <form action="{{route('master_obat.store')}}" method="POST">
                                        @csrf
                                        <div class="row mt-3">
                                            <div class="col-5 col-sm-12 col-md-12 col-lg-5">
                                                <label for="nama_obat">Nama Obat</label>
                                                <input type="form-control" name="nama_obat" id="nama_obat" class="form-control">
                                            </div>
                                            <div class="col mt-4">
                                                <select class="form-select" name="satuan" id="satuan">
                                                    <option selected>Pilih Satuan</option>
                                                    <option value="tablet">Tablet</option>
                                                    <option value="botol">Botol</option>
                                                    <option value="kaplet">Kaplet</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="harga_obat">Jumlah Obat</label>
                                                <input type="form-control" name="jumlah_obat" id="jumlah_obat" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="harga_obat">Harga Obat</label>
                                                <input type="form-control" name="harga" id="harga" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group text-right mt-4">
                                            <a href="#" class="btn btn-white mr-2" type="reset">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
