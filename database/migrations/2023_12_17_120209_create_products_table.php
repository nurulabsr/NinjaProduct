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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_title');
            $table->text('product_detail');
            $table->text('shiping_detail');
            $table->integer('product_price');
            $table->integer('shiping_cost');
            $table->text('thumnail_image');
            $table->text('product_image_1');
            $table->text('product_image_2');
            $table->text('product_image_3');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('products', function(Blueprint $table){
          $table->dropSoftDeletes();
        });
        Schema::dropIfExists('products');
    }
};
