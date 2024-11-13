<?php

use App\Http\Controllers\LayoutDasboard;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PerkuliahanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [ProfileController::class,'profil'])->name('profile');
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

//Mahasiswa
Route::get('/',[MasterController::class, 'main']);
Route::get('/masterMahasiswa', [MasterController::class,'mastermhs'])->middleware(['auth','role:dosen']);
Route::post('/masterMahasiswa', [MasterController::class,'POSTmasterMHS']);
Route::get('/masterMK',[MasterController::class,'mastermk'])->middleware(['auth','role:dosen']);
Route::get('/dataMahasiswa', [MasterController::class,'dataMaster'])->middleware(['auth','role:dosen']);
Route::get('/masterDosen', [MasterController::class,'masterdsn'])->middleware(['auth','role:dosen']);
Route::get('/absen-mahasiswa', [MasterController::class,'mastermahasiswa'])->middleware(['auth','role:dosen']);

//PAGES
Route::get('/calendar', [LayoutDasboard::class,'kalender'])->middleware(['auth','role:dosen|guest']);
Route::get('/gallery', [LayoutDasboard::class,'galeri'])->middleware(['auth','permission:view_pages']);
Route::get('/kanban', [LayoutDasboard::class,'kanban'])->middleware(['auth','permission:view_pages']);
//User
Route::get('/contacts', [LayoutDasboard::class,'kontak'])->middleware(['auth','role:dosen']);
Route::get('/e-commerce', [LayoutDasboard::class,'ecomer'])->middleware(['auth','role:dosen']);
Route::get('/invoice', [LayoutDasboard::class,'invoice'])->middleware(['auth','role:dosen']);
Route::get('/faq', [LayoutDasboard::class,'FAQ'])->middleware(['auth','role:dosen']);
//Mailbox
Route::get('/pages/mailbox/compose', [LayoutDasboard::class,'compos']);
Route::get('/pages/mailbox/mailbox', [LayoutDasboard::class,'mailbox']);
Route::get('/pages/mailbox/read-mail', [LayoutDasboard::class,'email_dibaca']);
//Projek
Route::get('/pages/project/project', [LayoutDasboard::class,'projek'])->middleware(['auth','role:mahasiswa|dosen|guest']);
Route::get('/pages/project/project-add', [LayoutDasboard::class,'projek_add'])->middleware(['auth','role:mahasiswa|dosen|guest']);
Route::get('/pages/project/project-edit', [LayoutDasboard::class,'projek_edit'])->middleware(['auth','role:mahasiswa|dosen|guest']);
Route::get('/pages/project/project-detail', [LayoutDasboard::class,'projek_detail'])->middleware(['auth','role:mahasiswa|dosen|guest']);

//Home
Route::get('/jadwalkuliah', [PerkuliahanController::class,'jk'])->middleware(['auth','role:mahasiswa|dosen']);
Route::post('/jadwalkuliah', [PerkuliahanController::class,'POSTjadwalklh']);
Route::get('/jadwalujian',[PerkuliahanController::class,'ju'])->middleware(['auth','role:mahasiswa|dosen']);
Route::get('/absenmahasiswa', [PerkuliahanController::class,'absen'])->middleware(['auth','role:mahasiswa|dosen']);
Route::get('/nilaimahasiswa', [PerkuliahanController::class,'nilai'])->middleware(['auth','role:mahasiswa|dosen']);

// Route::get('/dataUser', [ProfileController::class,'dataUser']);
Route::get('/pages/User/profile', function () {
    return view('/pages/User/profile');
})->middleware('auth','role:mahasiswa|dosen|guest');
