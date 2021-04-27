@extends('layouts.backend.admin')

@section('title')
    Program
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Program</h1>
        </div>

        <!-- Content Row -->

        <div class="row">
            <div class="card w-100">
                <h5 class="card-header">
                    <a href="{{route('program.create')}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
                </h5>
                <div class="card-body">
                    <table class="table" id="table">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Waktu</th>
                            <th>Agenda</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $i)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$i->judul}}</td>
                              <td>{{$i->waktu}}</td>
                              <td>{{$i->agenda}}</td>
                              <td>
                                <img src="{{Storage::url($i->photo)}}" alt="" width="200px">
                              </td>
                              <td>
                                <a href="{{route('program.edit', $i->id)}}" class="btn btn-warning btn-sm">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('program.destroy', $i->id)}}" method="POST" class="d-inline">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
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

@push('prepend-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endpush

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#table').DataTable();
      } );
    </script>
@endpush