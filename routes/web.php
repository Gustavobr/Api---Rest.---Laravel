<?php

 use App\Http\Resources\AlunoResource;
 use Illuminate\Http\Resources\Json\JsonResource;
 use App\Http\Resources;
 use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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

Route::get('/listar', 'AlunoController@index');
Route::get('/home','HomeController@home');
Route::get('/', 'HomeController@home');
Route::get('/listar/{curso}', 'AlunoController@show');
Route::get('/add','AlunoController@create');
//Route::group()
Route::get('/api', 'AlunoController@returnJson')->name('Request into Json');

Route::get('/json', function () {
    return response()->json([
    'nome' => 'Gustavo Barbosa',
    'email' => 'GustavoScipiao@gmail.com',
    'curso' => 'Sistemas de Informação'
]);
});



 


