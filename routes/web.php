<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('learnmore', function () {
    return view('learnmore');
})->name('learnmore');

Route::get('/forms', [FormularioController::class, 'showForm'])->name('forms.show');

Route::put('/rate', [FormularioController::class, 'rate'])->name('rate');

Route::get('/resultado', [FormularioController::class, 'showResultado'])->name('resultado');


Route::get('/verificar-sessao', function () {
    dd(session('ratings'));
})->name('verificar-sessao');

require __DIR__.'/auth.php';
