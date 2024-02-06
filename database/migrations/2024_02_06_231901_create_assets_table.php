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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->uuid('asset_key');
            $table->bigInteger('object_id')->unsigned();
            $table->bigInteger('method_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('nature_id')->unsigned();
            $table->integer('quantity')->default(0);
            $table->integer('price')->default(0);
            $table->integer('charge')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->unique('asset_key');
            $table->foreign('object_id')->references('id')->on('objects');
            $table->foreign('method_id')->references('id')->on('methods');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('nature_id')->references('id')->on('nature');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
