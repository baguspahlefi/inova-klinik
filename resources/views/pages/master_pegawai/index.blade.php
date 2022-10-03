
@extends('layouts.app')
@section('title')
Details Page
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
                        <h3 class="my-4">Data Pegawai</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-end mb-4">
                                        <a href=" {{route('master_pegawai.create')}} " class="btn btn-success">Tambah Pegawai</a>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>NIP</th>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Wilayah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse ($items as $item)
                                               <tr>
                                                <td> {{$item->id}} </td>
                                                <td> {{$item->NIP}} </td>
                                                <td> {{$item->email}} </td>
                                                <td> {{$item->name}} </td>
                                                <td> {{$item->status}} </td>
                                                <td> {{$item->masterwilayah_tabel->nama_wilayah}} </td>
                                                <td>
                                                    <a href=" {{route('master_pegawai.edit',$item->id)}} " class="btn btn-info">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action=" {{route('master_pegawai.destroy',$item->id)}} " method="POST" class="d-inline">
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
