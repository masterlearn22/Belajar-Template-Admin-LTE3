<?php

use App\Http\Controllers\LayoutDasboard;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', function() {
    return view('/absen-mahasiswa');
});
Route::get('/absen-mahasiswa', [LayoutDasboard::class,'nilai']);
Route::get('/jadwal-kuliah',[LayoutDasboard::class,'jadwal']);
Route::get('/nilai-mahasiswa', [LayoutDasboard::class,'absen']);



//PAGES
Route::get('/pages/calendar', [LayoutDasboard::class,'kalender']);
Route::get('/pages/gallery', [LayoutDasboard::class,'galeri']);
Route::get('/pages/kanban', [LayoutDasboard::class,'kanban']);

//User

Route::get('/pages/User/login', [LayoutDasboard::class,'masuk']);
Route::get('/pages/User/register', [LayoutDasboard::class,'daftar']);
Route::get('/pages/User/forgot-password', [LayoutDasboard::class,'lupa_sandi']);
Route::get('/pages/User/profile', [LayoutDasboard::class,'profil']);
Route::get('/pages/User/contacts', [LayoutDasboard::class,'kontak']);


//Mailbox
Route::get('/pages/mailbox/compose', [LayoutDasboard::class,'compos']);
Route::get('/pages/mailbox/mailbox', [LayoutDasboard::class,'mailbox']);
Route::get('/pages/mailbox/read-mail', [LayoutDasboard::class,'email_dibaca']);
