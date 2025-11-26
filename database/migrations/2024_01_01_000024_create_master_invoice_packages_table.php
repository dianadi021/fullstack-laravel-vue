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
            $table->string('label');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('treatment_classes')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('insurance_products')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->decimal('total_price', 15, 2)->default(0)->comment('Total Biaya = SUM(Sub Total Biaya Detail Paket Tarif)');
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
