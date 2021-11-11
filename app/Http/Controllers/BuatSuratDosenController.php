<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class BuatSuratDosenController extends Controller
	{
	    public function jenisSurat() {
            return view('buatSuratDosen');
           }
        public function suratTugas(){
            return view('suratTugasDosen');
        }
        public function simpanST(Request $request){
            DB::table('surat')->insert([
                'jenis_surat' => $request -> jenis_surat,
                'no_induk' => $request -> no_induk,
                'name' => $request -> name,
                'kgt_tugas' => $request -> kgt_tugas,
                'tema_kgt' => $request -> tema_kgt,
                'pyng_kgt' => $request -> pyng_kgt,
                'hari_kgt' => $request -> hari_kgt,
                'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);

            return redirect('/buatSuratDosen');
        }
        public function suratPersonalia(){
            return view('suratPersonalia');
        }
        public function suratUndangan(){
            return view('suratUndangan');
        }

        public function suratKKM(){
            return view('suratKKM');
        }
        public function beritaAcara(){
            return view('beritaAcara');
        }
	}
