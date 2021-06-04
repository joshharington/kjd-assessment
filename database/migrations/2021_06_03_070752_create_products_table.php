<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image_url')->nullable();
            $table->string('price')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('is_published')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
