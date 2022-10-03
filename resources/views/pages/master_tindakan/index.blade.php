@extends('layouts.app')
@section('title')
Master Tindakan
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
                        <h3 class="my-4">Data Tindakan</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-end mb-4">
                                        <a href=" {{route('master_tindakan.create')}} " class="btn btn-success">Tambah Tindakan</a>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id Tindakan</th>
                                                <th>Nama Tindakan</th>
                                                <th>Tarif</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                                <tr>
                                                    <td> {{$item->tindakan_id}} </td>
                                                    <td> {{$item->nama_tindakan}} </td>
                                                    <td> {{$item->tarif}} </td>
                                                    <td>
                                                        <a href=" {{route('master_tindakan.edit',$item->tindakan_id)}} " class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action=" {{route('master_tindakan.destroy',$item->tindakan_id)}} " method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Data Kosong</td>
                                                </tr>
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
