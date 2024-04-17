@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Kode_Barang" class="form-control" placeholder="Kode Barang">
            </div>
            <div class="col">
                <input type="text" name="Nama_Barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Jumlah_Barang" class="form-control" placeholder="Jumlah Barang">
            </div>
        </div>
        <div class="row">
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection