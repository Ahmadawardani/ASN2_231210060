<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\StrukturPanitiaController;
use App\Http\Controllers\BeritaController;


Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::get('/anggota/{id}/delete', [AnggotaController::class, 'confirmDelete'])->name('anggota.confirmDelete');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
Route::get('/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
Route::delete('/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index');
Route::post('/divisi', [DivisiController::class, 'store'])->name('divisi_store');
Route::get('/divisi/{id}/edit', [DivisiController::class, 'edit'])->name('divisi_edit');
Route::put('/divisi/{id}', [DivisiController::class, 'update'])->name('divisi.update');
Route::get('/divisi/create', [DivisiController::class, 'create'])->name('divisi_create');
Route::delete('/divisi/{id}', [DivisiController::class, 'destroy'])->name('divisi_destroy');
Route::resource('struktur_panitia', StrukturPanitiaController::class)->parameters(['struktur_panitia' => 'struktur_panitia']);;
Route::resource('berita', BeritaController::class);
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak.index');
Route::get('/', function () {
    return view('home');
});