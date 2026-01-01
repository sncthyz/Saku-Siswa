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
        Schema::create('manage_uangs', function (Blueprint $table) {
            $table->id();
$table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('nama_barang');
            $table->string('jenis_jajananharian');
            $table->integer('uangsaku');
            $table->integer('harga');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_uangs');
    }
};
