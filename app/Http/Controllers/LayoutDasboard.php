<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutDasboard
{

    //Home
    public function nilai()
    {
        return view("/absen-mahasiswa");
    }

    public function jadwal()
    {
        return view("/jadwal-kuliah");
    }
    public function absen()
    {
        return view("/nilai-mahasiswa");
    }


    //Pages

    public function kalender()
    {
        return view("/pages/calendar");
    }

    public function galeri()
    {
        return view("/pages/gallery");
    }

    public function kanban()
    {
        return view("/pages/kanban");
    }

    //User

    public function masuk(){
        return view("/pages/User/login");
    }

    public function daftar(){
        return view("/pages/User/register");
    }

    public function lupa_sandi(){
        return view("/pages/User/forgot-password");
    }

    public function profil(){
        return view("/pages/User/profile");
    }

    public function kontak(){
        return view("/pages/User/contacts");
    }

    //Mailbox
    public function compos(){
        return view("/pages/mailbox/compose");
    }

    public function mailbox(){
        return view("/pages/mailbox/mailbox");
    }

    public function email_dibaca(){
        return view("/pages/mailbox/read-mail");
    }

}
