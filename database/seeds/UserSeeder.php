<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_user' => 'herling',
            'nomor_induk' => '72190307',
            'password' => bcrypt('fti03'),
            'hak_akses' => 'mahasiswa',
            'tgl_lahir' => '2001-05-20',
            'no_hp' => '085278495627',
            'foto_user' => 'Herling.jpg',
            'remember_token' => str::random(30),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
