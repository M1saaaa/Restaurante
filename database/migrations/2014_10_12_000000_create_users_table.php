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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',25)->default('sin nombre');
            $table->string('apellido',25)->default('sin apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->date('email_verified_at')->default(now());
            $table->integer('telefono')->default('0');
            $table->string('direccion',55)->default('sin Direccion');
            $table->string('direccionAlt',55)->default('Sin Direccion Alternativa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
