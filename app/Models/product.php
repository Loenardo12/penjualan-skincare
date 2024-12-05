<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;

class product extends Model
{

    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_products';
    public $incrementing = true;
    protected $fillable = ['nama', 'harga', 'kategori','deskripsi','gambar'];
    public $timestamps = false;

      public function transaction()
    {
        return $this->hasMany(Transaction::class, 'product_id', 'id_products');
    }

}
