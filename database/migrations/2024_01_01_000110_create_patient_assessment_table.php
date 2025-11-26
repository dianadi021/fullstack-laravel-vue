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
        Schema::create('patient_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medical_record_id');
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onDelete('cascade');
            $table->unsignedBigInteger('detail_register_id');
            $table->foreign('detail_register_id')->references('id')->on('registration_details')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->jsonb('assessment')->nullable();
            $table->string('type');

            $table->unsignedBigInteger('user_id_created')->nullable();
            $table->foreign('user_id_created')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id_updated')->nullable();
            $table->foreign('user_id_updated')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_assessments');
    }
};
