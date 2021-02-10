<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama_pegawai' => 'Donny Anggara Putra',
                'tlp_pegawai' => '083813154407',
                'email_pegawai' => 'donnel.works@gmail.com',
                'pin_pegawai' => 979797,
                'toko_pegawai' => '1,',
                'jabatan_pegawai' => null,
                'level_pegawai' => 1,
                'foto_pegawai' => null,
            ],
            [
                'nama_pegawai' => 'Putra Anggara',
                'tlp_pegawai' => '083813154406',
                'email_pegawai' => 'donny.external@gmail.com',
                'pin_pegawai' => 135790,
                'toko_pegawai' => '1,',
                'jabatan_pegawai' => null,
                'level_pegawai' => 2,
                'foto_pegawai' => null,
            ],
        ]);
    }
}
