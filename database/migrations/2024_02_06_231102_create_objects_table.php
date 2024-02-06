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
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->uuid('object_key');
            $table->char('name', 100);
            $table->integer('current_price');
            $table->char('currency', 5);
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('sector_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->unique('object_key');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objects');
    }
};
