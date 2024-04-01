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
            $table->string('folio_p1');
            $table->string('folio_p2');
            $table->string('folio_p3');
            $table->string('folio');
            $table->string('fecha');
            $table->string('hora');
            $table->string('propietario');
            $table->string('linea_transportista');
            $table->string('numero_embarque');
            $table->string('operador');
            $table->string('placas_unidad');
            $table->strnig('placas_caja');
            $table->string('estructura');
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
            $table->string('firma_operador');
            $table->string('dictamen_final');
            $table->string('usuario_logeado');
            $table->string('observaciones');
            $table->string('evidencia1');
            $table->string('evidencia2');
            $table->string('evidencia3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
