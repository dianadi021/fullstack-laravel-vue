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
        Schema::create('work_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('health_employees')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('list_clients')->onDelete('cascade');
            $table->unsignedBigInteger('hafis_id')->nullable();
            $table->foreign('hafis_id')->references('id')->on('hafis_schedules')->onDelete('cascade');
            $table->string('code')->nullable();
            $table->string('bpjs_code')->nullable();
            $table->integer('number_day');
            $table->string('day');
            $table->time('start_at');
            $table->time('end_at');
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
        Schema::dropIfExists('work_schedules');
    }
};
