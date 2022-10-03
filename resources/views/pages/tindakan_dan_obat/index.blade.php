
@extends('layouts.app')
@section('title')
Tindakan Dan Obat
@endsection
@section('content')
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="my-4">Data Pasien Terdaftar</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama Pasien</th>
                                                <th>Pegawai</th>
                                                <th>Wilayah</th>
                                                <th>Status Tindakan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                            <tr>
                                                <th> {{$item->tdo_id}} </th>
                                                <th> {{$item->NIK}} </th>
                                                <th> {{$item->nama_pasien}} </th>
                                                <td> {{$item->user_tabel->name}} </td>
                                                <td> {{$item->masterwilayah_tabel->nama_wilayah}} </td>
                                                <td> {{$item->status_tindakan}} </td>
                                                <td>
                                                    <a href=" {{route('menu_tindakan_dan_obat.edit',$item->tdo_id)}} " class="btn btn-warning">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action=" {{route('menu_tindakan_dan_obat.destroy',$item->tdo_id)}} " method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                
                                            </tr>
                                            @empty
                                                
                                            @endforelse
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
    @endsection
</html>
