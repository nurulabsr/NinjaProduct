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
        Schema::create('ninja_products', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->float('price');
            $table->text('warenty_details');
            $table->text('customer_review');
            $table->integer('shiphing_cost');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::table('ninja_products', function(Blueprint $table){
           
        });  
        Schema::dropIfExists('ninja_products');
    }
};
