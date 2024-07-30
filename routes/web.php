<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentosController;
use App\Http\Middleware\ValidationRoleMiddleware;

Route::get('/welcome', function () {
    return view('welcome');
});
/* Dasboard */
Route::get('/dashboard', function () {
    $categories = Category::with('videos')->has('videos')->get();
      return view('dashboard', compact('categories'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tutoriales', function () {
    $categories = Category::with(['videos' => function($query) {
        $query->where('is_visible', 1);
    }])->whereHas('videos', function($query) {
        $query->where('is_visible', 1);
    })->get();

    return view('tutoriales', compact('categories'));
})->middleware(['auth', 'verified'])->name('tutoriales');

Route::get('/documentos', function () {
    $categories = Category::with(['documentos' => function($query) {
        $query->where('is_visible', 1);
    }])->whereHas('documentos', function($query) {
        $query->where('is_visible', 1);
    })->get();

    return view('documentos', compact('categories'));
})->middleware(['auth', 'verified'])->name('documentos');

/* Pagina de información */
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

        /* Dasboard */
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /* Perfil de Usuario */
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        /** Usuario */
        Route::post('/usuarios', [UsuariosController::class, 'save'])->name('usuarios.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/usuarios/{user}', [UsuariosController::class, 'update'])->name('usuarios.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/usuarios/{user}/delete', [UsuariosController::class, 'delete'])->name('usuarios.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/usuarios/crear', [UsuariosController::class, 'create'])->name('usuarios.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/usuarios/{user}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/usuarios/{user}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/usuarios/{user}/vista', [UsuariosController::class, 'vista'])->name('usuarios.vista')->middleware([ValidationRoleMiddleware::class]);

        Route::post('/usuarios/buscarCliente', [UsuariosController::class, 'buscarCliente'])->name('usuarios.buscarCliente');

        /** Videos */
        Route::post('/videos', [VideosController::class, 'save'])->name('videos.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/videos/{video}', [VideosController::class, 'update'])->name('videos.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/videos/{video}/delete', [VideosController::class, 'delete'])->name('videos.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/videos', [VideosController::class, 'index'])->name('videos.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/videos/crear', [VideosController::class, 'create'])->name('videos.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/videos/{video}/editar', [VideosController::class, 'edit'])->name('videos.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/videos/{video}', [VideosController::class, 'destroy'])->name('videos.destroy')->middleware([ValidationRoleMiddleware::class]);

        /** Categoria */
        Route::post('/categoria', [CategoriaController::class, 'save'])->name('categoria.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/categoria/{categoria}/delete', [CategoriaController::class, 'delete'])->name('categoria.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/categoria/crear', [CategoriaController::class, 'create'])->name('categoria.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/categoria/{categoria}/editar', [CategoriaController::class, 'edit'])->name('categoria.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy')->middleware([ValidationRoleMiddleware::class]);

        /** Cargos */
        Route::post('/cargos', [CargosController::class, 'save'])->name('cargos.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/cargos/{cargos}', [CargosController::class, 'update'])->name('cargos.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/cargos/{cargos}/delete', [CargosController::class, 'delete'])->name('cargos.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/cargos', [CargosController::class, 'index'])->name('cargos.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/cargos/crear', [CargosController::class, 'create'])->name('cargos.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/cargos/{cargos}/editar', [CargosController::class, 'edit'])->name('cargos.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/cargos/{cargos}', [CargosController::class, 'destroy'])->name('cargos.destroy')->middleware([ValidationRoleMiddleware::class]);

        /** Service */
        Route::post('/service', [ServiceController::class, 'save'])->name('service.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/service/{service}', [ServiceController::class, 'update'])->name('service.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/service/{service}/delete', [ServiceController::class, 'delete'])->name('service.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/service', [ServiceController::class, 'index'])->name('service.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/service/crear', [ServiceController::class, 'create'])->name('service.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/service/{service}/editar', [ServiceController::class, 'edit'])->name('service.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/service/{service}', [ServiceController::class, 'destroy'])->name('service.destroy')->middleware([ValidationRoleMiddleware::class]);

        /** Archivos */
        Route::post('/archivos', [DocumentosController::class, 'save'])->name('archivos.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/archivos/{documento}', [DocumentosController::class, 'update'])->name('archivos.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/archivos/{documento}/delete', [DocumentosController::class, 'delete'])->name('archivos.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/archivos', [DocumentosController::class, 'index'])->name('archivos.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/archivos/crear', [DocumentosController::class, 'create'])->name('archivos.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/archivos/{documento}/editar', [DocumentosController::class, 'edit'])->name('archivos.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/archivos/{documento}', [DocumentosController::class, 'destroy'])->name('archivos.destroy')->middleware([ValidationRoleMiddleware::class]);

        /* Clientes */
        Route::post('/clientes', [ClientesController::class, 'save'])->name('clientes.save')->middleware([ValidationRoleMiddleware::class]);
        Route::put('/clientes/{clientes}', [ClientesController::class, 'update'])->name('clientes.update')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/clientes/{clientes}/delete', [ClientesController::class, 'delete'])->name('clientes.delete')->middleware([ValidationRoleMiddleware::class]);

        Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/clientes/crear', [ClientesController::class, 'create'])->name('clientes.create')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/clientes/{clientes}/editar', [ClientesController::class, 'edit'])->name('clientes.edit')->middleware([ValidationRoleMiddleware::class]);
        Route::delete('/clientes/{clientes}', [ClientesController::class, 'destroy'])->name('clientes.destroy')->middleware([ValidationRoleMiddleware::class]);

        Route::post('/clientes/buscarCliente', [ClientesController::class, 'buscarCliente'])->name('clientes.buscarCliente');

        Route::get('/clientes/{clientes}/vista', [ClientesController::class, 'vista'])->name('clientes.vista')->middleware([ValidationRoleMiddleware::class]);
        Route::get('/clientes/{clientes}/confirmarPago', [ClientesController::class, 'updateConfirmarPago'])->name('clientes.confirmarPago')->middleware([ValidationRoleMiddleware::class]);
        Route::post('/clientes/{clientes}/confirmarPago', [ClientesController::class, 'confirmarPago'])->name('clientes.confirmarPago')->middleware([ValidationRoleMiddleware::class]);


});

require __DIR__.'/auth.php';
