<?php

use Illuminate\Support\Facades\Route;

//SERTAKAN FILE CONTROLLER
use App\Http\Controllers\CostumerController;


//JALUR UTAMA
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('template.main');
});

//======================================================================================================================

//ROUTE PAKE ANONYMOUS FUNCTION

//JIKA TDK ADA PARAMETER
Route::get('/kategori', function () {
    return "DATA KATEGORI";
});

//INI JIKA INGIN NGASIH PARAMETER, TARO PARAMETER DI KURUNG KURAWAL DAN STRINGNYA
Route::get('/artikel/{id}/ipk/{nama}', function ($idd, $name) {
    return "DATA ARTIKEL YANG ID NYA $idd DAN NAMANYA ADALAH $name";
});

//======================================================================================================================

//ROUTE REDIRECT VIEW

//'data_kategori' adalah akses/jln di urlnya
//'kategori' adlh file kategori yg ada di folder views/data
//nulis 'data.kategori' krn file kategori ada didlm folder data, & folder ada ada didlm folder views
Route::get('/data_kategori', function () {
    return view('data.kategori');
});
//======================================================================================================================

//ROUTE DGN CONTROLLER

//tulisan 'controller' yg ada di kurung siku adlh jln/akses di url
//'LatihanController' yg ada di kurung siku adlh nama file controllernya
//'tampil' yg ada di kurung siku adalah nama fungsi yg hrs kita buat di file LatihanController
Route::get('/controller', [LatihanController::class, 'tampil'])->name('dashboard');

//'{id}/{ipk}' adlh parameter, hrs didefinisikan di fungsi 'cekID'
Route::get('/cek/{id}/{ipk}', [LatihanController::class, 'cekID']);

Route::get('/list/{id}', [LatihanController::class, 'index']);

//======================================================================================================================
Route::get('/form', [LatihanController::class, 'formPost'])->name('tambah');
//PENDEFINISIAN TUJUAN ACTION ROUTE YG ADA DI FILE form_tambah.blade.php
//'->' memliki arti alias, hrs sesuai dgn nama route yg ditulis di file form_tambah.blade.php
Route::post('/simpan', [LatihanController::class, 'simpan'])->name('simpanPost');

Route::get('/about', [LatihanController::class, 'about'])->name('about');
Route::get('/login', [LatihanController::class, 'login'])->name('login');
Route::get('/home', [LatihanController::class, 'home'])->name('home');

//ROUTE dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');
    
//ROUTE Artikel
Route::get('/costumer', [CostumerController::class, 'index'])->name('costumer');
Route::get('/costumer/create', [CostumerController::class, 'create'])->name('costumer.create');
Route::post('/costumer/store', [CostumerController::class, 'store'])->name('costumer.store');
Route::get('/costumer/show/{id}', [CostumerController::class, 'show'])->name('costumer.show');
Route::get('/costumer/edit/{id}', [CostumerController::class, 'edit'])->name('costumer.edit');
Route::put('/costumer/update/{id}', [CostumerController::class, 'update'])->name('costumer.update');
Route::get('/costumer/destroy/{id}', [CostumerController::class, 'destroy'])->name('costumer.destroy');

