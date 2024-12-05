<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        return view('products.products-entry');
    }

    public function store(Request $request)
    {

       $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_products';
        $gambar->move($tujuan_upload, $nama_gambar);

        product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/product');
    }

    public function edit($id_products)
    {
        $product = product::find($id_products);
        return view('products.products-edit', compact('product'));
    }

    public function update(Request $request, $id_products)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $product = product::find($id_products);

        if($request->hasFile('gambar')){

            File::delete('img_products/'.$product->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_products';
            $gambar->move($tujuan_upload, $nama_gambar);
            $product->gambar = $nama_gambar;
        }

        $product->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/product');
    }

    public function delete($id_products)
    {
        $product = product::find($id_products);
        return view('products.products-hapus', compact('product'));
    }

    public function destroy($id_products)
    {
        $product = product::find($id_products);
        File::delete('img_products/'.$product->gambar);
        $product->delete();
        return redirect('/product');
    }

}
