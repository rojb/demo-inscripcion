<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('registro')->unique();
            $table->string('nombre');
            $table->string('email')->unique()->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->unique('usuario_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
