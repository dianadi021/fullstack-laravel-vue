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
        //             $this->SetClient($table);
        //         });
        //     }
        // }

        $listTables = [
        ];
        // foreach ($listTables as $table) {
        //     if (Schema::hasTable($table)) {
        //         Schema::table($table, function (Blueprint $table) {
        //             $this->SetRole($table);
        //         });
        //     }
        // }
    }

    public function SetClient($table)
    {
        $table->unsignedBigInteger('id_client')->nullable();
        $table->foreign('id_client')->references('id')->on('list_client')->onDelete('cascade');
    }

    public function SetRole($table)
    {
        $table->unsignedBigInteger('id_client_role')->nullable();
        $table->foreign('id_client_role')->references('id')->on('client_roles')->onDelete('cascade');
    }
};
