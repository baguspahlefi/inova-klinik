
@extends('layouts.app')
@section('title')
Master Obat
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
                        <h3 class="my-4">Data Obat</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-end mb-4">
                                        <a href=" {{route('master_obat.create')}} " class="btn btn-success">Tambah obat</a>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id Obat</th>
                                                <th>Nama Obat</th>
                                                <th>Satuan Obat</th>
                                                <th>Jumlah Obat</th>
                                                <th>Harga Obat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                                <tr>
                                                    <td> {{$item->obat_id}} </td>
                                                    <td> {{$item->nama_obat}} </td>
                                                    <td> {{$item->satuan}} </td>
                                                    <td> {{$item->jumlah_obat}} </td>
                                                    <td> {{$item->harga}} </td>
                                                    <td>
                                                        <a href=" {{route('master_obat.edit',$item->obat_id)}} " class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action=" {{route('master_obat.destroy',$item->obat_id)}} " method="POST" class="d-inline">
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
