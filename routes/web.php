<?php
use App\Http\Controllers\homeController;
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

Route::get('/', [homecontroller::class, 'home'], function () {[
"title" => "Home"
 ];      
});
Route::get('/about', [homecontroller::class, 'about'], function () {[
"title" => "About"
 ];      
});
Route::get('/profile', [homecontroller::class, 'profile'], function () {[
"title" => "profile"
 ];      
});
Route::get('/pegawai', [homecontroller::class, 'pegawai'], function () {[
"title" => "pegawai"
 ];      
});