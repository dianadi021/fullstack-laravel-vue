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
        Schema::create('treatment_units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();

            // ENUM SET START
            $table->enum('jenis_unit', ['Rawat Darurat', 'Rawat Jalan', 'Rawat Inap'])->comment('Rawat Darurat', 'Rawat Jalan', 'Rawat Inap');
            // ENUM SET END

            $table->string('description')->nullable();
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
        Schema::dropIfExists('treatment_units');
    }
};
