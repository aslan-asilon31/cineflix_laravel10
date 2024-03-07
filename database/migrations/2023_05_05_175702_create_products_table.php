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
            $table->string('product_id')->nullable();
            $table->string('status_master_id')->nullable();
            $table->string('category_master_id')->nullable();
            $table->integer('price_master_id')->nullable();
            $table->integer('image_master_id')->nullable();
            $table->string('image_banner')->nullable('empty-banner.png');
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->string('duration')->nullable();
            $table->string('time_production')->nullable();
            $table->integer('rating')->nullable();
            $table->text('wishlist')->nullable();
            $table->text('country')->nullable();
            $table->text('exclusive_access')->nullable();
            $table->text('desc')->nullable();
            $table->text('desc_1')->nullable();
            $table->text('desc_2')->nullable();
            $table->string('lang')->default('en');
            $table->string('lang_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

                // $table->string('name');
            // $table->double('price');
            // $table->text('description');
            // $table->string('image');
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
