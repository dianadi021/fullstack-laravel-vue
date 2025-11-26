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
        Schema::create('list_clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('company_profile')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('id_tier_level')->default(1);
            $table->foreign('id_tier_level')->references('id')->on('tier_level')->onDelete('cascade');
            $table->unsignedBigInteger('id_user_created')->nullable();
            $table->foreign('id_user_created')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_user_updated')->nullable();
            $table->foreign('id_user_updated')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_actived')->default(true);
            $table->timestamp('expired_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_clients');
    }
};
