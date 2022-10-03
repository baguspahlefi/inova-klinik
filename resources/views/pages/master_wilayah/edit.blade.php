@extends('layouts.app')
@section('title')
Details Page
@endsection
@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Input Data Master Wilayah</h3>
                        <div class="container" style="padding-top:70px ;">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h4 class="form-title">Form input wilayah</h4>
                                            <form action="{{route('master_wilayah.update',$item->wilayah_id)}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="nama_wilayah" id="nama_wilayah" value=" {{$item->nama_wilayah}} " class="form-control">
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
    </body>
    @endsection
</html>
