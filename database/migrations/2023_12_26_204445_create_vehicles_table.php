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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate')->unique();
            $table->unsignedBigInteger('make_id');
            $table->unsignedBigInteger('model_id');
            $table->decimal('price', 10, 2);
            $table->integer('seats');
            $table->integer('fuel');
            $table->boolean('transmission');
            $table->string('image_1');
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->timestamps();


            $table->foreign('make_id')->references('id')->on('makes');
            $table->foreign('model_id')->references('id')->on('v_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
