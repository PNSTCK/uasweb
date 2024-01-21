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
        Schema::create('pegawaies', function (Blueprint $table) {
            $table->id();
            $table->String('image');
            $table->integer('nip');
            $table->string('nama', 100);
            $table->String("jk", 50);
            $table->string('alamat', 100);
            $table->string('kota', 100);
            $table->string('nama_pangkat', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawaies');
    }
};
