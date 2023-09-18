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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->string('correo');
            $table->string('direccion');
            $table->timestamps();
        });
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });
        Schema::create('estilos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dificultad');
            $table->timestamps();
        });
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('id_estilo')->nullable();
            $table->unsignedBigInteger('id_profesor')->nullable();
            $table->foreign('id_estilo')->references('id')->on('estilos');
            $table->foreign('id_profesor')->references('id')->on('profesores');
            $table->timestamps();
        });
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_asistencia');
            $table->string('estado_asistencia');
            $table->unsignedBigInteger('id_estudiante')->nullable();
            $table->unsignedBigInteger('id_clase')->nullable();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->foreign('id_clase')->references('id')->on('clases');
            $table->timestamps();
        });
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inscripcion');
            $table->string('estado_pago');
            $table->string('num_pago');
            $table->unsignedBigInteger('id_estudiante')->nullable();
            $table->unsignedBigInteger('id_clase')->nullable();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->foreign('id_clase')->references('id')->on('clases');
            $table->timestamps();
        });
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pago');
            $table->decimal('monto', 10, 2);
            $table->unsignedBigInteger('id_inscripcion')->nullable();
            $table->foreign('id_inscripcion')->references('id')->on('inscripciones');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('pagos');
        Schema::dropIfExists('inscripciones');
        Schema::dropIfExists('asistencias');
        Schema::dropIfExists('clases');
        Schema::dropIfExists('estilos');
        Schema::dropIfExists('profesores');
        Schema::dropIfExists('estudiantes');
    }
};
