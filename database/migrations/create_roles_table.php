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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('access_level');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Admin', 'access_level' => 1],
            ['id' => 2, 'name' => 'Supervisor', 'access_level' => 2],
            ['id' => 3, 'name' => 'Doctor', 'access_level' => 3],
            ['id' => 4, 'name' => 'Caregiver', 'access_level' => 4],
            ['id' => 5, 'name' => 'Patient', 'access_level' => 5],
            ['id' => 6, 'name' => 'Family', 'access_level' => 5],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
