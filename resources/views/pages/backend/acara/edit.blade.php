@extends('layouts.backend.admin')

@section('title')
    Edit Acara
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Acara</h1>
        </div>

        <!-- Content Row -->

        <div class="row">
            <div class="card w-100">
                <h5 class="card-header">
                    Edit
                </h5>
                <div class="card-body">
                    <form action="{{route('acara.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="deskripsi">Example textarea</label>
                            <textarea class="form-control" name="deskripsi" id="editor">{{$item->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control-file" name="photo">
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