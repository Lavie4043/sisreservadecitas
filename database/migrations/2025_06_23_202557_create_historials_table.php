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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_visita');
            $table->string('motivo_consulta');
            $table->string('diagnostico');
            $table->string('tratamiento');
                    
            $table->string('examenes')->nullable();
            $table->string('examenes_resultados')->nullable();
            $table->string('receta')->nullable();
            $table->string('indicaciones')->nullable();
            $table->string('observaciones')->nullable();
            
            
        
           
            
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            

             


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historials');
    } 
                   
        
};
