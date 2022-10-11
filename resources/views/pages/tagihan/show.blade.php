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
                <h3 class="mt-4">Tagihan</h3>
                <div class="container" style="padding-top:50px ;">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 order-md-2 mb-4">
                                          <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">Your cart</span>
                                            <span class="badge badge-secondary badge-pill">3</span>
                                          </h4>
                                          <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                              <div>
                                                <h6 class="my-0">Nama Obat</h6>
                                                <small class="text-muted"> {{$item->masterobat_tabel->nama_obat}} </small>
                                              </div>
                                              <span class="text-muted">x{{$item->masterobat_tabel->jumlah_obat}} </span>
                                              <span class="text-muted">Rp. {{$item->masterobat_tabel->harga}} </span>
                                              
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                              <div>
                                                <h6 class="my-0">Jenis Tindakan</h6>
                                                <small class="text-muted"> {{$item->mastertindakan_tabel->nama_tindakan}} </small>
                                              </div>
                                              <span class="text-muted">Rp. {{$item->mastertindakan_tabel->tarif}} </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                              <span>Total</span>
                                              <strong>Rp. {{$item->total_tagihan}}</strong>
                                            </li>
                                          </ul>
                                    
                                          <form class="card p-2" action=" {{route('tagihan.update',$item->id)}} " novalidate method="POST" >
                                            @csrf
                                            @method('put')
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Input pembayaran" id="bil1">
                                              <div class="input-group-append">
                                                <button type="submit" class="btn btn-secondary">Bayar</button>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="col-md-8 order-md-1">
                                          <h4 class="mb-3">Billing address</h4>
                                          <form class="needs-validation" novalidate>
                                            <div class="row">
                                              <div class="col-md-4 mb-3">
                                                <label for="NIK">NIK Pasien</label>
                                                <p class="fw-bolder"> {{$item->NIK}} </p>
                                              </div>
                                              <div class="col-md-4 mb-3">
                                                <label for="NIK">Nama Pasien</label>
                                                <p class="fw-bolder"> {{$item->nama_pasien}} </p>
                                              </div>
                                              <div class="col-md-4 mb-3">
                                                <label for="NIK">No Phone</label>
                                                <p class="fw-bolder"> {{$item->no_phone}} </p>
                                              </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="NIK">Tanggal Lahir</label>
                                                    <p class="fw-bolder"> {{$item->tanggal_lahir}} </p>
                                                  </div>
                                                  <div class="col-md-4 mb-3">
                                                    <label for="NIK">Jenis Kelamin</label>
                                                    <p class="fw-bolder"> {{$item->jenis_kelamin}} </p>
                                                  </div>
                                                  <div class="col-md-4 mb-3">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" readonly placeholder="Leave a comment here" id="floatingTextarea"> {{$item->keluhan}} </textarea>
                                                        <label for="floatingTextarea">Keluhan pasien</label>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                  <label for="NIK">Pegawai</label>
                                                  <p class="fw-bolder"> {{$item->user_tabel->name}} </p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                  <label for="NIK">Wilayah</label>
                                                  <p class="fw-bolder"> {{$item->masterwilayah_tabel->nama_wilayah}} </p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="NIK">Status Pembayaran</label>
                                                    <p class="fw-bolder"> {{$item->status_pembayaran}} </p>
                                                  </div>
                                              </div>
                                          </form>
                                        </div>
                                    </div>
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



