@extends('layouts.backend.admin')

@section('title')
    Galeri
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
                    <form action="{{route('galeri.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="albums_id">Album</label>
                            <select class="form-control" name="albums_id">
                              <option>-- Pilih Album --</option>
                              @foreach ($albums as $i)
                                <option value="{{$i->id}}">{{$i->judul}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photos">Photo</label>
                            <input type="file" class="form-control-file" name="photos">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endpush