
@extends('layouts.app')
@section('title')
Menu Pasien
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
                        <h3 class="my-4">Data Pasien</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-end mb-4">
                                        <a href=" {{route('menu_pasien.create')}} " class="btn btn-success">Tambah Pasien</a>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id Pasien</th>
                                                <th>Nama Pasien</th>
                                                <th>NIK</th>
                                                <th>Pegawai</th>
                                                <th>Wilayah</th>
                                                <th>Aksi</th>
                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($item as $item)
                                                <tr>
                                                    <td> {{$item->id}} </td>
                                                    <td> {{$item->nama_pasien}} </td>
                                                    <td> {{$item->NIK}} </td>
                                                    <td> {{$item->user_tabel->name}} </td>
                                                    <td> {{$item->masterwilayah_tabel->nama_wilayah}} </td>
                                                    <td>
                                                        <a href=" {{route('menu_pasien.edit',$item->id)}} " class="btn btn-primary">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action=" {{route('menu_pasien.destroy',$item->id)}} " method="POST" class="d-inline">
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    @endsection
</html>
