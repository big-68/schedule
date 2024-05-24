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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_week')->nullable();
            $table->foreignId('class_id')
                ->nullable()
                ->constrained('school_classes')
                ->cascadeOnUpdate()
                ->noActionOnUpdate();
            $table->foreignId('callingSchedule_id')
                ->nullable()
                ->constrained('calling_schedules')
                ->cascadeOnUpdate()
                ->noActionOnUpdate();
            $table->string('subject')->nullable();
            $table->foreignId('classroom_id')
                ->nullable()
                ->constrained('classrooms')
                ->cascadeOnUpdate()
                ->noActionOnUpdate();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->noActionOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
