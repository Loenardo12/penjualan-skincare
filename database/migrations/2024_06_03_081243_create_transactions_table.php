<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('nomorhp',15);
            $table->text('alamat');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id_products')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('harga');
            $table->string('status',50);
            $table->date('tanggal');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
