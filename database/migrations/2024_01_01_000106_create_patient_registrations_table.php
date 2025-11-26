<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patient_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('list_clients')->onDelete('cascade');
            $table->unsignedBigInteger('mother_id')->nullable();
            $table->foreign('mother_id')->references('id')->on('patients')->onDelete('cascade');

            $table->string('insurance_number')->nullable();

            // ENUM SET START
            $table->string('payment_method')->comment("jkn, mandiri, asuransi_lainnya, umum")->default('umum');
            $table->string('is_baby')->comment('tidak, ya')->default('tidak');
            $table->string('patient_type')->comment('baru, lama')->default('baru');
            $table->string('status_register')->comment('booking, masuk, menunggu, diperiksa, resep, mutasi_rajal, rawat_inap, mutasi_ranap, keluar, selesai, batal')->default('masuk');
            $table->string('status_payment')->comment('belum_lunas, dicicil, lunas, batal')->default('belum_lunas');
            // ENUM SET END

            $table->jsonb('families')->nullable();
            $table->jsonb('patient_pic')->nullable();

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
        Schema::dropIfExists('patient_registrations');
    }
};
