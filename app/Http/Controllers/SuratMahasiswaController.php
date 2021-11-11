<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class SuratMahasiswaController extends Controller
{
    public function suratMasuk() {
        $sm = DB::table('surat')->get();
         return view('suratMasukMahasiswa', ['sm' => $sm]);
}
//surat keluar
public function suratKeluar() {
    $sk = DB::table('surat')->get();
     return view('suratKeluarMahasiswa', ['sk' => $sk]);
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
    return redirect('/suratKeluarMahasiswa');
}
public function deleteSK($id) {
    $sk = DB::table('surat')->where('id_surat',$id)->delete();
    return redirect('/suratKeluarMahasiswa');
    }

//arsipSurat
 public function arsipSurat() {
    $as = DB::table('surat')->get();
     return view('arsipSuratMahasiswa', ['as' => $as]);
 }
}

