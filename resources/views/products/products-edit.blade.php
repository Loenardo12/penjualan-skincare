@extends('layouts.app')

@section('title')
Edit product | beautuful butterfly Admin
@endsection

@section('content')
<h3>Edit products</h3>
<div class="form-login">
  <form action="{{ url('/product/update/' . $product->id_products) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="products">products</label>
    <input class="input" type="text" name="nama" id="products" placeholder="products"
      value="{{ old('nama', $product->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Price</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price"
      value="{{ old('harga', $product->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">kategori</label>
    <input class="input" type="text" name="kategori" id="price" placeholder="kategory"
      value="{{ old('kategori', $product->kategori) }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description"
      placeholder="Description">{{ old('deskripsi', $product->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <img src="{{ asset('img_products/' . $product->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
