@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="Kode_Barang" class="form-control" placeholder="Kode" value="{{ $product->Kode_Barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="Nama_Barang" class="form-control" placeholder="Nama" value="{{ $product->Nama_Barang }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah Barang</label>
            <input type="text" name="Jumlah_Barang" class="form-control" placeholder="Jumlah" value="{{ $product->Jumlah_Barang}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Keterangan Dibuat</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Keterangan Diperbarui</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection