<?php

use App\Http\Livewire\Aspirasi\CallAspirasi;
use App\Http\Livewire\Aspirasi\FormAspirasi;
use App\Http\Livewire\Aspirasi\GuestHistoryAspirasi;
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
    return view('landing');
})->name('landing');

Route::get('/aspirasi', FormAspirasi::class)->name('aspirasi-form');
Route::get('/history', GuestHistoryAspirasi::class)->name('history');

Route::get('storage/{path}/{filename}', function ($path, $filename){
    return response()->file(storage_path("app/$path/{$filename}"));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function(){
        Route::get('/', function(){
            return redirect('/admin/aspirasi');
        });

        Route::get('aspirasi', CallAspirasi::class)->name('admin.aspirasi');
    });
});
