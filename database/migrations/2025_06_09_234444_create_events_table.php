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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->dateTime('start');
            $table->dateTime('end');       
            $table->string('color');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')-> references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')-> references('id')->on('doctors')->onDelete('cascade');
            $table->unsignedBigInteger('consultorio_id');
            $table->foreign('consultorio_id')-> references('id')->on('consultorios')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
