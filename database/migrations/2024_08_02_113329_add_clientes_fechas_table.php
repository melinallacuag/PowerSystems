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
        Schema::table('clientes', function (Blueprint $table) {
            $table->date('fecha_instalacion')->nullable(false)->after('fecha_fin');
            $table->date('fecha_apertura')->nullable(false)->after('fecha_instalacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('clientes', function (Blueprint $table) {
            $table->date('fecha_instalacion')->nullable()->change();
            $table->date('fecha_apertura')->nullable()->change();
        });
    }
};
