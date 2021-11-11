<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class SuratController extends Controller
{
    public function suratMasuk() {
        $sm = DB::table('surat')->get();
         return view('suratMasuk', ['sm' => $sm]);
}
//surat keluar
public function suratKeluar() {
    $sk = DB::table('surat')->get();
     return view('suratKeluar', ['sk' => $sk]);
 }
 public function editSK($id)
 {
     $sk = DB::table('surat')->where('id_surat',$id)->get();

     return view('editSK', ['sk' => $sk]);
 }

public function update(Request $request) {
    DB::table('surat')->where('id_surat', $request->id_surat)->update([
        'no_induk' => $request -> no_induk,
        'name' => $request -> name,
        'kgt_tugas' => $request -> kgt_tugas,
        'tema_kgt' => $request -> tema_kgt,
        'pyng_kgt' => $request -> pyng_kgt,
        'hari_kgt' => $request -> hari_kgt,
        'tgl_laksanakan' => $request -> tgl_laksanakan,
    ]);
    return redirect('/suratKeluar');
}
public function deleteSK($id) {
    $sk = DB::table('surat')->where('id_surat',$id)->delete();
    return redirect('/suratKeluar');
    }

//arsipSurat
 public function arsipSurat() {
    $as = DB::table('surat')->get();
     return view('arsipSurat', ['as' => $as]);
 }
}

