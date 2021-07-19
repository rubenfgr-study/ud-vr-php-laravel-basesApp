<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestYear;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-date', function () {
    $title = "Fecha Actual";
    $date = date('d/m/Y');
    return view('show-date', array('title' => $title, 'date' => $date));
});

Route::get('/film/{title}/{year?}', function ($title = "Sin Título", $year = 2021) {
    return view('film', ['title' => $title, 'year' => $year]);
})->where(['title' => '[a-zA]+', 'year' => '[0-9]+']);

Route::get('films/list', function () {
    $title = "Listado de películas";
    $list = ['Batman', 'Spiderman', 'Gran torino'];
    return view("films/list")->with('title', $title)->with('list', $list);
});

Route::get('/generic-page', function () {
    return view('page');
});

Route::get('/films/{page?}', [FilmController::class, 'index'])->name('films.index');

Route::get('/details/{year?}', [FilmController::class, 'detail'])->name('films.details')->middleware(TestYear::class);
Route::get('/redirect', [FilmController::class, 'redirect'])->name('films.redirect');
Route::get('/form', [FilmController::class, 'form'])->name('films.form');
Route::post('/receive', [FilmController::class, 'receive'])->name('films.receive');

Route::resource('user', UserController::class);



Route::prefix('fruits')->group(function () {
    Route::get('/', [FruitController::class, 'index'])->name('fruits.index');
    Route::get('/detail/{id}', [FruitController::class, 'detail'])->name('fruits.detail');
    Route::get('/create', [FruitController::class, 'create'])->name('fruits.create');
    Route::post('/save', [FruitController::class, 'save'])->name('fruits.save');
    Route::get('/delete/{id}', [FruitController::class, 'delete'])->name('fruits.delete');
    Route::get('/edit/{id}', [FruitController::class, 'edit'])->name('fruits.edit');
    Route::post('/update/', [FruitController::class, 'update'])->name('fruits.update');
});
