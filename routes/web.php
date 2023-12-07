<?php

use App\Http\Controllers\Testcontroller;
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
/*
Route::get('/', function () {
return view('welcome');
});
*/



Route::get('/', [Testcontroller::class, 'Booklist']);
Route::get('/pokus', [Testcontroller::class, 'Booklst']);
// Route::get('/pokus', function () {
//     //return view('pokus');
// });

