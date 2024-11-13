<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Respone;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{

   public function main(){
      $sb_menu = 'Main';
      $sb_submenu = 'main';
         // $user = Auth::user();
 return view('auth.login',  compact('sb_menu','sb_submenu'));
} 

   public function mastermhs(){
         $sb_menu = 'mahasiswa';
         $sb_submenu = 'mastermahasiswa';
         // $user = Auth::user();
    return view('/master/masterMahasiswa',  compact('sb_menu','sb_submenu'));
   } 

   public function POSTmasterMHS(Request $request){
      $data = Mahasiswa::create([
         'nim'=> request('nim'),
         'nama'=> request('nama'),
         'no_wa'=> request('no_wa'),
         'kelas_praktikum'=> request('kelas_praktikum')
      ]) ;

      $request ->validate([
         'nim'=>'required|numeric|unique:mahasiswa,nim',
         'nama'=>'required',
      ]
   );
      if ($data){
         return back();
      }
   }

   public function store (Request $request){
      return 'hi';
   }

   
   public function show(Request $request){
      //
   }
   public function edit($id){
      //
   }

   public function delete (Request $request){
     //
   }

   public function mastermk(){
      $sb_menu = 'mahasiswa';
      $sb_submenu = 'masterMK';
         // $user = Auth::user();
 return view('/master/masterMK',  compact('sb_menu','sb_submenu'));
   } 

   public function dataMaster(){
      $sb_menu = 'mahasiswa';
      $sb_submenu = 'masterKelas';
   return view('/master/dataMahasiswa',  compact('sb_menu','sb_submenu'),[
   "datamahasiswa" => Mahasiswa::all()

   ]);
   } 

   public function masterdsn(){
      $sb_menu = 'mahasiswa';
      $sb_submenu = 'masterDosen';
         // $user = Auth::user();
 return view('/master/masterDosen',  compact('sb_menu','sb_submenu'));
   } 
}
