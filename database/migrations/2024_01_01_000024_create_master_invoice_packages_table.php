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
        Schema::create('master_invoice_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->unsignedBigInteger('id_produk_asuransi')->nullable();
            $table->foreign('id_produk_asuransi')->references('id')->on('produk_asuransi')->onDelete('cascade');
            $table->decimal('total_biaya', 15, 2)->default(0)->comment('Total Biaya = SUM(Sub Total Biaya Detail Paket Tarif)');
            $table->boolean('is_actived')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_invoice_packages');
    }
};
