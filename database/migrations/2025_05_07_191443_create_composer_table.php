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
        Schema::create('composer', function (Blueprint $table) {
            $table->id();
            $table->integer('idRecette');
            $table->integer('idGradiant');
            $table->timestamps();
            $table->foreign('idRecette')->references('id')->on('recettes')->onDelete('cascade');
            $table->foreign('idGradiant')->references('id')->on('ingrediants')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composer');
    }
};
