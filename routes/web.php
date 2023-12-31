<?php

use App\Http\Controllers\Admin\RespostaSuporteController;
use App\Http\Controllers\Admin\SuporteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
Route::post('/contato/enviar', [ContatoController::class, 'store'])->name('contato.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/suporte/{id}/respostas', [RespostaSuporteController::class, 'store'])->name('respostas.store');
    Route::delete('/suporte/{id}/respostas/{resposta}', [RespostaSuporteController::class, 'destroy'])->name('respostas.destroy');
    Route::get('/suporte/{id}/respostas', [RespostaSuporteController::class, 'index'])->name('respostas.index');


    Route::delete('/suporte/{id}', [SuporteController::class, 'destroy'])->name('suporte.destroy');
    Route::put('/suporte/{id}', [SuporteController::class, 'update'])->name('suporte.update');
    Route::get('/suporte/{id}/edit', [SuporteController::class, 'edit'])->name('suporte.edit');
    Route::get('/suporte/create', [SuporteController::class, 'create'])->name('suporte.create');
    Route::post('/suporte', [SuporteController::class, 'store'])->name('suporte.store');
    Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte.index');

    Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
    Route::get('/download/windows/{windows}', [DownloadController::class, 'windowsDownload'])->name('windows');
    Route::get('/download/linux/{linux}', [DownloadController::class, 'linuxDownload'])->name('linux'); 
    Route::get('/download/ios/{ios}', [DownloadController::class, 'iosDownload'])->name('ios'); 

    
   /*  Route::get('/download/linux', [DownloadController::class, 'download'])->name('download.linux'); */

    
});

require __DIR__ . '/auth.php';