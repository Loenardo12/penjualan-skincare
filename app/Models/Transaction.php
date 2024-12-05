<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;


class Transaction extends Model
{
     use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['nama', 'nomorhp', 'alamat', 'product_id', 'harga', 'status'];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id', 'id_products');
    }


}
