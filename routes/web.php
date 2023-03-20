<?php


use App\Http\Controllers\libraryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/library', [libraryController::class, 'index']);
Route::get('/library/create', [libraryController::class, 'create'])->middleware('admin');
Route::post('/library/store', [libraryController::class, 'store'])->middleware('admin');
Route::get('/library/{id}/edit', [libraryController::class, 'edit'])->middleware('admin');
Route::patch('/library/{id}', [libraryController::class, 'update'])->middleware('admin');
Route::delete('/library/{id}', [libraryController::class, 'delete'])->middleware('admin');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', function () {
        return view('auth.verify-email');
    });
});