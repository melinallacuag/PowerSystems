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
        Schema::table('users', function (Blueprint $table) {
            $table->string('ruc', 11)->after('email'); // ruc solo tien 11 digitos
            $table->text('razon_social')->after('ruc'); // razon social puede ser mas largo que el maximo del string que es 255 caracteres, por eso ponemos text
            // que campo mas era? :V
            // cargo tambien sera una razon social algo asi no?

            // cargo de la empresa por ejemplo: su administradora o el contador, incluso el dueño, ahi ira el nombre del administrador, contador ? o solo ira administrador , contador?
            // solo el cargo oki doki
            // ya wichos entonces ahora neceistamos correr la migrcion, abre tu phpmyadmin
            // ya wichos con eso tienes los campos creados, ahora faltaria hacer que desde el formulario registres eso
            // eso after agregamos para que se agregue despues de esa columnba estas nuevas

            /// Mosnse y los roles ?
            // todo eso que estoy haciendo de eliminar una columna, actualizar, se puede hacer desde migraciones
            // pero como la base de datos es chiquita, lo hacmeos manualmente
            // como te digo las migraciones son como un control de versiones, vealo como git pero para base de datos
            // ahora esas migraciones ejecutadas se guardan en esa tabla, asi que si ya existe una migracion con este nombre
            // no se volvera a ejecutar si corremos el comando php artisan migrate

            $table->string('cargo', 180)->after('razon_social');
            $table->string('rol', 180)->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
