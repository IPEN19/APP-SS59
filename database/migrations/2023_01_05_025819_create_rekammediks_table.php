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
        Schema::create('rekammediks', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekmed', 50)->unique();
            $table->string('nik_pass', 50);
            $table->string('nm_pass', 250);
            $table->string('umur_pass', 20);
            $table->string('hp_pass', 100);
            $table->string('alamat_pass', 500);
            $table->longText('diagnosa');
            $table->bigInteger('ruangs_id');
            $table->string('foto');
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
        Schema::dropIfExists('rekammediks');
    }
};
