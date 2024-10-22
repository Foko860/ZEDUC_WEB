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
        Schema::create('parrainage', function (Blueprint $table) {
            $table->unsignedBigInteger('id_parrainage');
            $table->unsignedBigInteger('id_parrain');
            $table->foreign('id_parrain')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('id_filleul');
            $table->foreign('id_filleul')->references('id')->on('users')->onDelete('set null');
            $table->dateTime('date_parrainage');
            $table->string('points_de_fidelites')->default(0);


            //definition de clé primaire
            $table->primary('id_parrain','id_filleul');

            $table->foreign('id_parrain','id_filleul')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parrainage');
    }
};
