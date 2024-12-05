@extends('layouts.app')

@section('title')
products | beautuful butterfly Admin
@endsection

@section('content')
<h3>products</h3>
<button type="button" class="btn btn-tambah">
  <a href="/product/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">Photo</th>
        <th scope="col" style="width: 10%">Merek</th>
        <th scope="col" style="width: 10%">Price</th>
        <th scope="col" style="width: 10%">Kategori</th>
        <th scope="col" style="width: 20%">Description</th>
        <th scope="col" style="width: 25%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($products as $product)
    <tr>
      <td><img src="{{ asset('img_products/' . $product->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $product->nama }}</td>
      <td>Rp. {{ number_format($product->harga) }}</td>
      <td>{{ $product->kategori }} </td>
      <td>{{ $product->deskripsi }}</td>
      <td>
        <a class='btn-edit' href="/product/edit/{{ $product->id_products }}">Edit</a>
        |
        <a class='btn-delete' href="/product/hapus/{{ $product->id_products }}">Hapus</a>
        |
        <a class='btn-detail' href="/product/detail/{{ $product->id_products }}">Detail</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="6" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
