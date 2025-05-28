<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('prod_id'); // Primary key
            $table->string('prod_name');
            $table->string('prod_pict1')->nullable();
            $table->string('prod_pict2')->nullable();
            $table->string('prod_pict3')->nullable();
            $table->longText('prod_summary_en')->nullable();
            $table->longText('prod_summary_id')->nullable();
            $table->unsignedBigInteger('prod_cat_id');
            $table->timestamps();

            // Foreign key constraint (optional, if categories table exists)
            // $table->foreign('prod_cat_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
