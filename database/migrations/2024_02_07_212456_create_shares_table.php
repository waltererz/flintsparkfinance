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
        Schema::create('shares', function (Blueprint $table) {
            $table->id();
            $table->uuid('share_key');
            $table->bigInteger('section_id')->unsigned();
            $table->bigInteger('investor_id')->unsigned();
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();

            $table->unique('share_key');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('investor_id')->references('id')->on('investors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shares');
    }
};
