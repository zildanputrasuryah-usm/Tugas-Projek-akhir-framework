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
    //makul	Dosen	SKS	Hari	Ruang	
    public function up()
    {
        Schema::create('makul', function (Blueprint $table) {
            $table->id();
            $table->string('Makul');
            $table->string('Dosen');
            $table->string('SKS');
            $table->string('Hari');
            $table->string('Ruang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makul');
    }
};
