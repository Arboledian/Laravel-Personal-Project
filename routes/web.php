<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vtuber;
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
///character/{query}
