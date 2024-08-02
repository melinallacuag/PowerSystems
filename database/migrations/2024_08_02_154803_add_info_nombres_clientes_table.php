<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('nom_comercial')->after('razon_social');
            $table->string('nom_contacto')->after('nom_comercial');
            $table->string('correo',255)->nullable()->after('nom_contacto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('nom_comercial');
            $table->dropColumn('nom_contacto');
            $table->dropColumn('correo');
        });
    }
};
