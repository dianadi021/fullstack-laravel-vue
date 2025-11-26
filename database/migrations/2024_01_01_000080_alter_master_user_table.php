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
        $listTables = [
        ];
        // foreach ($listTables as $table) {
        //     if (Schema::hasTable($table)) {
        //         Schema::table($table, function (Blueprint $table) {
        //             $this->SetUser($table);
        //         });
        //     }
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }

    public function SetUser($table)
    {
        $table->unsignedBigInteger('id_user_created')->nullable();
        $table->foreign('id_user_created')->references('id')->on('users')->onDelete('cascade');
        $table->unsignedBigInteger('id_user_updated')->nullable();
        $table->foreign('id_user_updated')->references('id')->on('users')->onDelete('cascade');
    }
};
