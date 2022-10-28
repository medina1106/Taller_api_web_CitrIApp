<?php

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LogueoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterCultiveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 
// 

/* Vista para Ayuda */

Route::get('/Ayuda', function () {
    return view('agricultor.Ayuda');
})->name('agricultor.Ayuda');


// 
/* Vista Nosotros */
Route::get('/Nosotros', function () {
    return view('agricultor.Nosotros');
})->name('agricultor.nosotros');





/* Mientras no este autenticado puede utilizar estas rutas */
Route::middleware('guest')->group(function () {

    // 
    Route::post('logueo', [LogueoController::class, 'store'])->name('login2');
    // 
    /* Ruta para ir a iniciar o registrarse en el aplicativo */
    Route::get('Iniciar', [RegisterController::class, 'iniciar'])->name('login');
    // 
    /* Ruta para realizar el registro del usuario */
    /* Route::post('register', [RegisterController::class, 'store'])->name('register'); */
    // 
    /* Ruta para ir a iniciar o registrarse en el aplicativo */
    /* Route::get('Iniciar', [RegisterController::class, 'iniciar'])->name('login'); */
    // 
    /* Ruta para realizar el registro del usuario */
    Route::post('register', [RegisterController::class, 'store'])->name('register');
    // 
    Route::get('/', function () {
        return view('index');
    });
    // 
    /* Socialite Registrarse o iniciar sesion con ((FACEBOOK))*/
    Route::get('auth/facebook', [FacebookController::class, 'redirectFacebook']);
    Route::get('auth/facebook/callback', [FacebookController::class, 'callbackFacebook']);
    // 
});
// 
// 
// 
/* AUTH (((AGRICULTOR))) Solo deja ingresar si esta autenticado */
Route::group(['middleware' => 'auth'], function () {
    // 
    /* Ruta para salir del aplicativo */
    Route::post('logout', [RegisterController::class, 'destroy'])->name('logout');
    // 
    /* Ruta para ir al HOME */
    Route::get('/Home', function () {
        return view('agricultor.Home');
    })->name('Home');
    // 
    /* Ver los cultivos que tiene el agricultor */
    Route::get('/Cultivos', function () {
        return view('agricultor.Cultivos');
    })->name('agricultor.Cultivos');
    // 
    /* Ver el historial de predicciones */
    Route::get('/Historial', function () {
        return view('agricultor.Historial');
    })->name('agricultor.Historial');
    // 
    /* Ver el Perfil del agricultor */
    Route::get('/Perfil', function () {
        return view('agricultor.Perfil');
    })->name('agricultor.Perfil');
    // 
    /* Vista para realizar la Prediccion */
    Route::get('/Prediccion', function () {
        return view('agricultor.Prediccion');
    })->name('agricultor.Prediccion');
    //
    /*Vista para Registrar Cultivos */
    Route::get('/RegistroC', function () {
        return view('agricultor.RegistroC');
    })->name('agricultor.RegistroC');
    //
    /* GUARDAR CULTIVOS */
    Route::post('RegisterCultive', [RegisterCultiveController::class, 'store'])->name('RegisterCultive');
    //
    /* ACTUALIZAR DATOS DE AGRICULTOR */
    Route::post('UpdateUser', [RegisterController::class, 'update'])->name('User.update');
});


/* AUTH (((ADMIN))) Solo deja ingresar si esta autenticado */
Route::group(['middleware' => 'auth.admin'], function () {
    Route::get('/Admin_H', function () {
        return view('administrador.Home');
    })->name('Admin_H');
    //
    /* VISTA PARA REGISTRAR ADMINISTRADORES O ADMINISTRADORES */
    Route::get('Users_Register', function () {
        return view('administrador.Registro');
    })->name('admin.register');
    //
    /* REGISTRAR ADMINISTRADORES */
    Route::post('register_admin', [RegisterController::class, 'storeadmin'])->name('save_admin');
    //
    /* REGISTRAR AGRICULTORES DESDE LA VISTA DEL ADMIN */
    Route::post('register_agr', [RegisterController::class, 'storeagr'])->name('save_agr');
});
