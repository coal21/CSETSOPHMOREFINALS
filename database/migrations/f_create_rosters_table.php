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
            $table->string('supervisor_first_name');
            $table->string('supervisor_last_name');
            

            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->string('doctor_first_name');
            $table->string('doctor_last_name');
            
            
            $table->unsignedBigInteger('caregiver_1_id');
            $table->foreign('caregiver_1_id')->references('id')->on('caregivers');
            $table->string('caregiver_1_first_name');
            $table->string('caregiver_1_last_name');
            

            $table->unsignedBigInteger('caregiver_2_id');
            $table->foreign('caregiver_2_id')->references('id')->on('caregivers');
            $table->string('caregiver_2_first_name');
            $table->string('caregiver_2_last_name');
            
            $table->unsignedBigInteger('caregiver_3_id');
            $table->foreign('caregiver_3_id')->references('id')->on('caregivers');
            $table->string('caregiver_3_first_name');
            $table->string('caregiver_3_last_name');
            
            $table->unsignedBigInteger('caregiver_4_id');
            $table->foreign('caregiver_4_id')->references('id')->on('caregivers');
            $table->string('caregiver_4_first_name');
            $table->string('caregiver_4_last_name');
            

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
