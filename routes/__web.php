<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Semaforo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('semaforo', [Semaforo::class, 'get']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});
Route::get('/indicadores', function () {
    //return view('welcome');
    return view('indicadores');
})->name("indicadores");


Route::get('/reporte', function () {
    //return view('welcome');
    $estaciones=new Semaforo();
    return view('reporte')->with(["estaciones"=>$estaciones->getEstaciones()]);
})->name("reporte");

Route::post('/reporte',[App\Http\Controllers\Semaforo::class, 'post'])->name("reportePost");
Route::get('/reportetest',[App\Http\Controllers\Semaforo::class, 'post'])->name("reporteGet");


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
