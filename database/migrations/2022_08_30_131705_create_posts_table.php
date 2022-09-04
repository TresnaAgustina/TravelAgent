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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_id');
            $table->foreignId('category_id');
            $table->string('package_img');
            $table->string('package_code')->unique();
            $table->string('package_category');
            $table->string('package_name');
            $table->text('package_desc');
            $table->string('package_price');
            $table->string('price_include');
            $table->string('price_exlude');
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
        Schema::dropIfExists('posts');
    }
};
