<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LayoutDasboard
{
    //Pages

    public function kalender()
    {
        $sb_menu = "pages";
        $sb_submenu = 'calendar';
        // $user = Auth::user();
   return view('/pages/calendar',  compact('sb_menu','sb_submenu'));
    }

    public function galeri()
    {
        $sb_menu = "pages";
        $sb_submenu = 'gallery';
        // $user = Auth::user();
        return view('/pages/gallery',  compact('sb_menu','sb_submenu'));
    }

    public function kanban()
    {
        $sb_menu ="pages";
        $sb_submenu = 'kanban';
        // $user = Auth::user();
        return view('/pages/kanban',  compact('sb_menu','sb_submenu'));
    }

    //User

    public function kontak(){
        $sb_menu ="User";
        $sb_submenu = 'contacts';
        // $user = Auth::user();
        return view('/pages/User/contacts',  compact('sb_menu','sb_submenu'));
    }

    public function ecomer(){    
        $sb_menu ="User";
        $sb_submenu = 'e-commerce';
        // $user = Auth::user();
        return view('/pages/User/e-commerce',  compact('sb_menu','sb_submenu'));
    }

    public function invoice(){
        $sb_menu ="User";
        $sb_submenu = 'invoice';
        // $user = Auth::user();
        return view('/pages/User/invoice',  compact('sb_menu','sb_submenu'));
    }

    public function FAQ(){
        $sb_menu ="User";
        $sb_submenu = 'faq';
        // $user = Auth::user();
        return view('/pages/User/faq',  compact('sb_menu','sb_submenu'));
    }

    //Mailbox
    public function compos(){
        $sb_menu ="mailbox";
        $sb_submenu = 'compose';
        // $user = Auth::user();
        return view('/pages/mailbox/compose',  compact('sb_menu','sb_submenu'));
    }

    public function mailbox(){
        $sb_menu ="mailbox";
        $sb_submenu = 'mailbox';
        // $user = Auth::user();
        return view('/pages/mailbox/mailbox',  compact('sb_menu','sb_submenu'));
    }

    public function email_dibaca(){
        $sb_menu ="mailbox";
        $sb_submenu = 'read';
        // $user = Auth::user();
        return view('/pages/mailbox/read-mail',  compact('sb_menu','sb_submenu'));
    }

    //Project
    public function projek(){
        return view("/pages/project/project");
    }

    public function projek_add(){
        return view("/pages/project/project-add");
    }

    public function projek_edit(){
        return view("/pages/project/project-edit");
    }

    public function projek_detail(){
        return view("/pages/project/project-detail");
    }

    //perkuliahan
  
}
