@extends('layouts.master')
@section('title', 'Create News')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Jual beli</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Jual Beli</a></li>
          <li class="breadcrumb-item active">Create</li>
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
        <h3 class="card-title">Create Data</h3>
      </div>
      <!-- /.card-header -->
      <form action="{{ route('news.store') }}" method="POST">
        @CSRF
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="title">Pelanggan</label>
                <input type="text" name="pelanggan" class="form-control @error('pelanggan') is-invalid @enderror" placeholder="pelanggan baru">
                <small class="text-danger">@error('pelanggan') {{$message}} @enderror</small>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="picture">Barang</label>
                <input type="text" name="barang" class="form-control @error('barang') is-invalid @enderror" placeholder="barang baru">
                <small class="text-danger">@error('barang') {{$message}} @enderror</small>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="content">Transaksi</label>
                <input type="text" name="transaksi" class="form-control @error('transaksi') is-invalid @enderror" placeholder="transaksi baru">
                <small class="text-danger">@error('transaksi') {{$message}} @enderror</small>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card-footer">
          <div class="d-flex justify-content-end">
            <a href="{{ route('news.index') }}" class="m-1 btn btn-outline-danger">Back</a>
            <button type="submit" class="m-1 btn btn-success">Create</button>
          </div>
        </div>
      </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection