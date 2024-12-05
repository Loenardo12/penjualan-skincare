@extends('layouts.app')

@section('title')
Tambah produk | beautuful butterfly Admin
@endsection

@section('content')
<h3>Input products</h3>
<div class="form-login">
  <form action="{{ url('/product/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="products">products</label>
    <input class="input" type="text" name="nama" id="products" placeholder="products" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Price</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">Kategori</label>
    <input class="input" type="text" name="kategori" id="price" placeholder="kategory" value="{{ old('kategori') }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Description">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
