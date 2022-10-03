
@extends('layouts.app')
@section('title')
Master Wilayah
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
                        <h3 class="my-4">Master Data Wilayah</h3>
                        <div class="container-fluid px-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-end mb-4">
                                        <a href=" {{route('master_wilayah.create')}} " class="btn btn-success">Tambah Wilayah</a>
                                    </div>
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id Wilayah</th>
                                                <th>Nama Wilayah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                                <tr>
                                                    <td class="text-center">{{$item->wilayah_id}}</td>
                                                    <td>{{ $item->nama_wilayah }}</td>
                                                    <td>
                                                        <a href=" {{route('master_wilayah.edit',$item->wilayah_id)}} " class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action=" {{route('master_wilayah.destroy',$item->wilayah_id)}} " method="POST" class="d-inline">
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
