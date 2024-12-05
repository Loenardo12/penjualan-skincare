<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = product::all();

        return view('dashboard', compact('products'));
    }
    public function CreateTransaction(Request $request)
    {
        $test=$this->validate($request, [
            'id_products' => 'required|integer',
            'detail-harga' => 'required',
            'detail-nama' => 'required',
            'detail-nomor' => 'required',
            'detail-alamat' => 'required',
            'status' => 'required',
        ]);
        Transaction::create([
            'nama' => $request->input('detail-nama'),
            'nomorhp' => $request->input('detail-nomor'),
            'alamat' => $request->input('detail-alamat'),
            'product_id' => $request->input('id_products'),
            'harga' => $request->input('detail-harga'),
            'status' => $request->input('status'),
        ]);
        return redirect('/');
    }
}
