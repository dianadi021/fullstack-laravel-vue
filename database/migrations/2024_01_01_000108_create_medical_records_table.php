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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_register_id');
            $table->foreign('detail_register_id')->references('id')->on('registration_details')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('list_clients')->onDelete('cascade');

            $table->jsonb('resume_rajal')->nullable();
            $table->jsonb('resume_ranap')->nullable();
            $table->jsonb('resume_darurat')->nullable();
            
            $table->jsonb('diagnosa')->nullable();
            $table->jsonb('tindakan')->nullable();
            $table->jsonb('catatan')->nullable();
            $table->jsonb('list_resep')->nullable();

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
        Schema::dropIfExists('medical_records');
    }
};
