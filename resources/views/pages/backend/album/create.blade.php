@extends('layouts.backend.admin')

@section('title')
    Album
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->

        <div class="row">
            <div class="card w-100">
                <h5 class="card-header">
                    Tambah
                </h5>
                <div class="card-body">
                    <form action="{{route('album.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="isactive">Isactive</label>
                            <select class="form-control" name="isactive">
                              <option value="1">Yaa</option>
                              <option value="0">Tidak</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection