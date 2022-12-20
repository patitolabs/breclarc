<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\UserController;
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
    return redirect('videos');
});

Route::get('/logout', function() {
    return redirect('/');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('subjects', SubjectController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('users', UserController::class);
    Route::get('weeks', [WeekController::class, 'index'])->name('weeks');
    Route::get('weeks/{week}', [WeekController::class, 'show'])->name('weeks.show');
});

require __DIR__.'/auth.php';
