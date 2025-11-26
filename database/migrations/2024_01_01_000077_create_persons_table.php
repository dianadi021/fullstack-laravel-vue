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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('id_card')->unique()->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fullname');
            $table->json('other_id_card')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_id_card')->nullable();
            $table->string('pob')->nullable();
            $table->datetime('dob')->nullable();
            $table->string('religion')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('blood_type')->nullable();

            $table->jsonb('residential_address')->nullable();
            $table->jsonb('id_card_address')->nullable();
            $table->jsonb('person_details')->nullable();

            // ENUM SET START
            $table->enum('education', ['Tidak Diketahui', 'Tidak Sekolah', 'SD', 'SLTP', 'SLTA', 'D1-D3', 'D4', 'S1', 'S2', 'S3'])->comment('Tidak Diketahui, Tidak Sekolah, SD, SLTP, SLTA, D1-D3, D4, S1, S2, S3')->nullable();
            $table->enum('employment', ['Tidak Diketahui', 'Tidak Bekerja', 'PNS', 'TNI/POLRI', 'BUMN', 'Pegawai', 'Swasta/Wirausaha', 'Buruh', 'Lain-lain'])->comment('Tidak Diketahui, Tidak Bekerja, PNS, TNI/POLRI, BUMN, Pegawai, Swasta/Wirausaha, Buruh, Lain-lain')->nullable();
            $table->enum('marital_status', ['Tidak Diketahui', 'Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'])->comment('Tidak Diketahui, Belum Kawin, Kawin, Cerai Hidup, Cerai Mati')->nullable();
            $table->enum('gender', ['Tidak Diketahui', 'Laki - Laki', 'Perempuan', 'Tidak Dapat Ditentukan', 'Tidak Mengisi'])->comment('Tidak Diketahui, Laki-Laki, Perempuan, Tidak Dapat Ditentukan, Tidak Mengisi');

            // Anomali/Entitas Tidak Dikenal Start
            $table->enum('estimated_age', ['Tidak Tau', '0 - 5', '6 - 11', '12 - 17', '18 - 40', '41 - 65', '> 65'])->comment('Tidak Tau, 0 - 5, 6 - 11, 12 - 17, 18 - 40, 41 - 65, > 65')->nullable();
            $table->string('location_found')->nullable();
            $table->datetime('date_found')->nullable();
            // Anomali/Entitas Tidak Dikenal End
            // ENUM SET END

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
