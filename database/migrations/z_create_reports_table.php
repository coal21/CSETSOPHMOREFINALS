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
    Schema::create('reports', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('patient_id')->nullable();
        $table->foreign('patient_id')->references('id')->on('patients');

        $table->unsignedBigInteger('caregiver_id')->nullable();
        $table->foreign('caregiver_id')->references('id')->on('caregivers');

        $table->string('morning_medicine')->default(0);
        $table->string('afternoon_medicine')->default(0);
        $table->string('night_medicine')->default(0);
        $table->string('breakfeast')->default(0);
        $table->string('lunch')->default(0);
        $table->string('dinner')->default(0);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
