@extends('layouts.master')
@section('title', 'News')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Artikel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Home</a></li>
          <li class="breadcrumb-item active">Artikel</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">List Artikel</h3>
          <a href="{{ route('news.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
            Tambah Data</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table-suppliers" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($news as $news)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $news->judul }}</td>
              <td><img width="150px" src="{{ url('/img/'.$news->file) }}"></td>
              <td>{{$news->deskripsi }}</td>
              <td>
                <a href="{{ route('news.edit', [$news->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                <form class="float-left m-1" action="{{ route('news.destroy', [$news->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                @method('delete')
                  <button type="submit" class="btn btn-danger">Delete</a>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          
          </tfoot>
        </table>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function() {
    $("#table-news").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush