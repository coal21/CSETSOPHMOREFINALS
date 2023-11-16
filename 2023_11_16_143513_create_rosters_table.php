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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->date('roster_date');

            $table->unsignedBigInteger('supervisor_id');
            $table->foreign('supervisor_id')->references('id')->on('supervisors');

            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            
            $table->unsignedBigInteger('caregiver_1_id');
            $table->foreign('caregiver_1_id')->references('id')->on('caregivers');

            $table->unsignedBigInteger('caregiver_2_id');
            $table->foreign('caregiver_2_id')->references('id')->on('caregivers');

            $table->unsignedBigInteger('caregiver_3_id');
            $table->foreign('caregiver_3_id')->references('id')->on('caregivers');

            $table->unsignedBigInteger('caregiver_4_id');
            $table->foreign('caregiver_4_id')->references('id')->on('caregivers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
