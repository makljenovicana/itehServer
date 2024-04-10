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
        Schema::table('orders', function (Blueprint $table) {
                // Pretpostavljamo da postoji kolona 'product_id' u tabeli 'orders'
                // i da referencira kolonu 'id' u tabeli 'products'
                $table->unsignedBigInteger('product_id');
                // $table->foreign('product_id')->references('id')->on('products');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
    }
};
