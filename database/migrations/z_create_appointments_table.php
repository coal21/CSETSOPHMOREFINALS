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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('appointment_date')->nullable(true);
            $table->text('comment')->nullable(true);
            
            $table->unsignedBigInteger('patient_id')->nullable(true);
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->unsignedBigInteger('doctor_id')->nullable(true);
            $table->foreign('doctor_id')->references('id')->on('doctors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
