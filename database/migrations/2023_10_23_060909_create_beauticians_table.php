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
        //id, name, status, description
        Schema::create('beauticians', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->string('speciality',100)->unique();
            $table->string('status',10)->default('active');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beauticians');
    }
};
