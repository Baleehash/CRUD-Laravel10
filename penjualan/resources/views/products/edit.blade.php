@extends('layouts.app')
  
@section('title', 'Update Barang')
  
@section('contents')
    <h1 class="mb-0">Update Barang</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="Kode_Barang" class="form-control" placeholder="Kode Barang" value="{{ $product->Kode_Barang }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="Nama_Barang" class="form-control" placeholder="Nama Barang" value="{{ $product->Nama_Barang }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Barang</label>
                <input type="text" name="Jumlah_Barang" classh="form-control" placeholder="Jumlah Barang" value="{{ $product->Jumlah_Barang }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection