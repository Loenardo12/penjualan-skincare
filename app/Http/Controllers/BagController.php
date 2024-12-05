<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BagController extends Controller
{
    public function addToBag(Request $request)
    {
        // Ambil data produk berdasarkan ID
        $product = Product::find($request->product_id);

        // Ambil session bag atau buat baru jika belum ada
        $bag = session()->get('bag', []);

        // Cek jika produk sudah ada di bag, jika ya tambahkan kuantitasnya
        if (isset($bag[$request->product_id])) {
            $bag[$request->product_id]['quantity']++;
        } else {
            // Jika produk belum ada di bag, tambahkan produk ke bag
            $bag[$request->product_id] = [
                "name" => $product->nama,
                "quantity" => 1,
                "price" => $product->harga,
                "image" => $product->gambar
            ];
        }

        // Simpan kembali bag ke session
        session()->put('bag', $bag);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}
