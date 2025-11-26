<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registration_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->foreign('register_id')->references('id')->on('patient_registrations')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('list_clients')->onDelete('cascade');

            // ENUM SET START
            $table->string('status_register')->comment('booking, masuk, menunggu, diperiksa, resep, mutasi_rajal, rawat_inap, mutasi_ranap, keluar, selesai, batal')->default('masuk');
            // ENUM SET END

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('bed_id');
            $table->foreign('bed_id')->references('id')->on('treatment_beds')->onDelete('cascade');
            $table->timestamp('start_datetime')->nullable();
            $table->timestamp('end_datetime')->nullable();

            $table->unsignedBigInteger('user_id_created')->nullable();
            $table->foreign('user_id_created')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id_updated')->nullable();
            $table->foreign('user_id_updated')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration_details');
    }
};
