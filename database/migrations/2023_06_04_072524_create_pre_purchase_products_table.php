<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_purchase_products', function (Blueprint $table) {
            $table->id();

            $table->decimal('quantity', 10, 2);
            $table->decimal('price', 11, 2);
            $table->decimal('iva', 10, 2);
            $table->decimal('subtotal', 11, 2);
            $table->decimal('iva_subtotal', 11, 2);
            $table->integer('item');

            $table->foreignId('pre_purchase_id')->constrained()->onUpdate('restrict');
            $table->foreignId('product_id')->constrained()->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_purchase_products');
    }
};
