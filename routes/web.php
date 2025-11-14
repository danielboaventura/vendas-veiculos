<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\VeiculoPublicController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\ModeloController;
use App\Http\Controllers\Admin\CorController;
use App\Http\Controllers\Admin\VeiculoController;



Route::get('/', [VeiculoPublicController::class, 'index'])->name('site.home');
Route::get('/veiculos', [VeiculoPublicController::class, 'veiculos'])->name('site.veiculos');
Route::get('/veiculo/{id}', [VeiculoPublicController::class, 'show'])->name('site.veiculo');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::prefix('admin')->name('admin.')->group(function () {

        
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        
        Route::resource('marcas', MarcaController::class);
        Route::resource('modelos', ModeloController::class);
        Route::resource('cores', CorController::class);
        Route::resource('veiculos', VeiculoController::class);
    });
});

require __DIR__.'/auth.php';
