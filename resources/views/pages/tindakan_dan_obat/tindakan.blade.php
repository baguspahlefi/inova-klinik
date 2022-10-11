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
                                    <div class="text-end my-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Tambah Tindakan Dan Obat
                                        </button>
                                    </div>
                                     
                                    <form action="{{route('menu_tindakan_dan_obat.pembayaran',$item->id)}}" class="row g-3 needs-validation" novalidate method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">No KTP</label>
                                            <p class="fw-bolder"> {{$item->NIK}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Nama Pasien</label>
                                            <p class="fw-bolder"> {{$item->nama_pasien}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">No HP</label>
                                            <p class="fw-bolder"> {{$item->no_phone}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
                                            <p class="fw-bolder"> {{$item->tanggal_lahir}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Jenis Kelamin</label>
                                            <p class="fw-bolder"> {{$item->jenis_kelamin}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <textarea class="form-control" readonly placeholder="Leave a comment here" id="floatingTextarea"> {{$item->keluhan}} </textarea>
                                                <label for="floatingTextarea">Keluhan pasien</label>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Pegawai</label>
                                            <p class="fw-bolder"> {{$item->user_tabel->name}} </p>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Wilayah</label>
                                            <p class="fw-bolder"> {{$item->masterwilayah_tabel->nama_wilayah}} </p>
                                        </div>
                        
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Tindakan </label>
                                            <p class="fw-bolder"> {{$item->mastertindakan_tabel->nama_tindakan}} </p>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Obat </label>
                                            <p class="fw-bolder"> {{$item->masterobat_tabel->nama_obat}} </p>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Jumlah Obat </label>
                                            <p class="fw-bolder"> {{$item->jumlah_obat}} </p>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Keterangan Obat </label>
                                            <p class="fw-bolder"> {{$item->keterangan_obat}} </p>
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
                                            <button class="btn btn-primary" type="submit">Pembayaran</button>
                                        </div>
                                    </form>

                                    <!-- Modal -->
                                    <form action="{{route('menu_tindakan_dan_obat.update',$item->id)}}" class="row g-3 needs-validation" novalidate method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Input Tindakan Dan Obat</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
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
                                                            <label for="validationCustom02" class="form-label">Jumlah Obat</label><br>
                                                            <input type="number" id="quantity" name="jumlah_obat">
                                                        </div>
                                                        <div class="col-md-4 my-4">
                                                            <div class="form-floating">
                                                                <textarea class="form-control"  placeholder="Keterangan Obat" id="floatingTextarea" name="keterangan_obat">  </textarea>
                                                                <label for="floatingTextarea">Keterangan Obat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Tutup MOdal -->

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
