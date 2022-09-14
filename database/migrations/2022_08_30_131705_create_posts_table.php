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
            $table->string('image')->nullable();
            $table->integer('code')->unique();
            $table->string('category');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('price');
            $table->string('price_include')->nullable();
            $table->string('price_exlude')->nullable();
            $table->text('destination1')->nullable();
            $table->text('destination2')->nullable();
            $table->text('destination3')->nullable();
            $table->text('destination4')->nullable();
            $table->text('destination5')->nullable();
            $table->text('destination6')->nullable();
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
