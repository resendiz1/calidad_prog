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
        Schema::create('fvu', function (Blueprint $table) {
            $table->id();
            $table->string('planta');
            $table->string('folio_p1')->nullable('0');
            $table->string('folio_p2')->nullable('0');
            $table->string('folio_p3')->nullable('0');
            $table->string('folio');
            $table->string('fecha');
            $table->string('hora');
            $table->string('propietario');
            $table->string('linea_transportista');
            $table->string('numero_embarque');
            $table->string('operador');
            $table->string('placas_unidad');
            $table->string('placas_caja');
            $table->string('estractura_transporte');
            $table->string('estructura_contenedor');
            // verificacio interna
            $table->string('piso');
            $table->string('puertas');
            $table->string('paredes');
            $table->string('techo');
            $table->string('materia_desconocida');
            $table->string('plaga');
            $table->string('limpieza');
            $table->string('olores_desconocidos');
            $table->string('filtraciones');
            //verificacion interna
            $table->string('certificado_fumigacion');
            $table->string('libre_basura');
            $table->string('vidrios_estrellados');
            $table->string('sanitizacion_llantas');
            $table->string('firma_operador')->nullable();
            $table->string('dictamen_final');
            $table->string('usuario_logeado');
            $table->string('observaciones')->nullable();
            $table->string('evidencia1')->nullable();
            $table->string('evidencia2')->nullable();
            $table->string('evidencia3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fvu');
    }
};
