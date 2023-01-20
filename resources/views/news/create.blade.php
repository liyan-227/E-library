@extends('layouts.master')
@section('title', 'Create News')
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
          <li class="breadcrumb-item"><a href="">Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Artikel</a></li>
          <li class="breadcrumb-item active">Buat</li>
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
        <h3 class="card-title">Tambah Data</h3>
      </div>
      <!-- /.card-header -->
      <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @CSRF
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul">
                <small class="text-danger">@error('judul') {{$message}} @enderror</small>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="title">Penulis</label>
                <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" placeholder="Masukkan penulis">
                <small class="text-danger">@error('penulis') {{$message}} @enderror</small>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="picture">Gambar</label>
                <input type="file" name="file" placeholder="Image" multiple>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="content">Deskripsi</label>
                <textarea id="mytextarea" type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan deskripsi" style="height: 300px;"></textarea>   
                <small class="text-danger">@error('deskripsi') {{$message}} @enderror</small>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card-footer">
          <div class="d-flex justify-content-end">
            <a href="{{ route('news.index') }}" class="m-1 btn btn-outline-danger">Kembali</a>
            <button type="submit" class="m-1 btn btn-success">Tambah</button>
          </div>
        </div>
      </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection