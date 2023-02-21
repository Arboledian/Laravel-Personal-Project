<?php

use App\Models\Vtuber;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VtuberController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//dado que estoy usando controlador, en vez de escribir los datos aca llamo a las clases del controlador
Route::get('/', [VtuberController::class, 'index']);

Route::get('/character', [VtuberController::class, 'displayCharacter']);

Route::get('/register', [UserController::class, 'register'])->middleware('guest');


/* Create New User
en la vista registro se usa un metodo POST que redirige a /user, por lo tanto se crea esta ruta
y se usa la clase store en el controlador*/

Route::post('/users', [UserController::class, 'store']);

 #region copiadoypegado

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
#endregion
