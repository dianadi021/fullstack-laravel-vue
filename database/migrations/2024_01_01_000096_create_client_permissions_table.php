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
        Schema::create('client_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('list_clients')->onDelete('cascade');
            $table->unsignedBigInteger('menu_id')->comment('Didapat dari level tier di tabel list_menus berdasarkan tier level');
            $table->foreign('menu_id')->references('id')->on('list_menus')->onDelete('cascade');
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
        Schema::dropIfExists('client_permissions');
    }
};
