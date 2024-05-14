<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/', function () {
    return view('layouts.web.inicio.index');
});

Route::get('/nosotros', function () {
    return view('layouts.web.nosotros.index');
});

Route::get('/servicios', function () {
    return view('layouts.web.servicios.index');
});

Route::get('/noticias', function () {
    return view('layouts.web.noticias.index');
});

Route::get('/contactanos', function () {
    return view('layouts.web.contactanos.index');
});

Route::get('/sven-escritorio', function () {
    return view('layouts.web.soluciones.svenEscritorio.index');
});

Route::get('/appsven-house', function () {
    return view('layouts.web.soluciones.appsvenHouse.index');
});

Route::get('/appsven-cloud', function () {
    return view('layouts.web.soluciones.appsvenCloud.index');
});


Route::get('/appsven-tienda-house', function () {
    return view('layouts.web.soluciones.appsvenTiendaHouse.index');
});


Route::get('/appsven-tienda-cloud', function () {
    return view('layouts.web.soluciones.appsvenTiendaCloud.index');
});

Route::get('/appsven-rfid', function () {
    return view('layouts.web.soluciones.appsvenRfid.index');
});

Route::get('/controlador-dys', function () {
    return view('layouts.web.soluciones.controladorDys.index');
});

Route::get('/sistema-telemedicion', function () {
    return view('layouts.web.soluciones.sistemaTelemedicion.index');
});

Route::middleware('auth')->group(function () {
    // todo lo que va aqui esta protegido por autenticacion
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // aqui creamos la ruta register que queremos para registrar usuarios
    // creamos un controlador en la carpeta controllers y hacemos que nuestra ruta apunte a ese controlador y al metodo index
    // la clase del controlador - el metodo al que queremos apuntar
    // vamos a tener 4 rutas de registrar, para listar usuarios, crear, editar, eliminar y guardar

    // este servira para listar usuarios
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    // creamos una ruta de tipo post, que sera una ruta para guardar la informacion
    Route::post('/usuarios', [UsuariosController::class, 'save'])->name('usuarios.save');
    // este servira para la vista que te saldra cuando das click en un boton crear nuevo usuario
    Route::get('/usuarios/crear', [UsuariosController::class, 'create'])->name('usuarios.create');
    // otra ruta para mostrar la vista para editar usuarios
    Route::get('/usuarios/{id}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    // ruta para actualizar la data
    Route::get('/usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
    // ruta para elimina algo
    Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy'])->name('destroy.create');
});

// aqui ve creando tus rutas para tu pagina
// revisar plantillas blade, extends, yield
// basicamente revisa eso, es similar al include y require de tu pagina web que hiciste
// https://laravel.com/docs/11.x/blade#extending-a-layout

// https://laravel.com/docs/11.x/blade#layouts-using-template-inheritance



require __DIR__.'/auth.php';
