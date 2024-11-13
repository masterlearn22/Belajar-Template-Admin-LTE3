<?php

namespace App\Http\Controllers;
use App\Models\perkuliahan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class PerkuliahanController extends Controller
{

  // public function __construct()
  // {
  //   $this->middleware(['permission:view_perkuliahan']);
  // }

  public function jk()
  {
      $sb_menu = 'perkuliahan';
      $sb_submenu = 'Jadwal kuliah';
      // DB::table('perkuliahan')->select('matkul','hari')->get();
      $data =  DB::table('perkuliahan')->get();
      // $user = Auth::user();
  return view('/perkuliahan/jadwal-kuliah',compact('sb_menu','sb_submenu'),[
    "jadwalKlh" => $data
    ]);
  }  

  public function POSTjadwalklh(Request $request, $id){
    $jadwal = Perkuliahan::create([
      'matkul'=> $request->matkul,
      'jns_matkul'=> $request->jns_matkul,
      'hari'=> $request->hari,
      'jam'=> $request->jam,
      'kelas'=> $request->kelas
    ]);
}

public function store (Request $request){
   return 'hi';
}


  public function ju()
{
    $sb_menu = 'perkuliahan';
    $sb_submenu = 'Jadwal ujian';
    // $user = Auth::user();

return view('/perkuliahan/jadwal-ujian',  compact('sb_menu','sb_submenu'));
} 
    public function absen()
  {
      $sb_menu = 'perkuliahan';
      $sb_submenu = 'Absen mahasiswa';
      // $user = Auth::user();
 return view('/perkuliahan/absen-mahasiswa',  compact('sb_menu','sb_submenu'));
}  
public function nilai()
{
    $sb_menu = 'perkuliahan';
    $sb_submenu = 'Nilai mahasiswa';
    // $user = Auth::user();
return view('/perkuliahan/nilai-mahasiswa',  compact('sb_menu','sb_submenu'));
}  


}
