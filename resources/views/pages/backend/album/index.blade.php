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
                    <a href="{{route('album.create')}}" class="btn btn-primary">Tambah Data</a>
                </h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Active</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($items as $item)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$item->judul}}</td>
                              <td>{{$item->isactive}}</td>
                              <td>
                                <a href="" class="btn btn-warning btn-sm">
                                  Edit
                                </a>
                                <a href="{{route('album.foto', $item->id)}}" class="btn btn-info btn-sm">
                                  Foto
                                </a>
                                <form action="" class="d-inline">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger btn-sm">
                                    Delete
                                  </button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection