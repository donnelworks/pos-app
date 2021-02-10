<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pegawai extends Controller
{
    public function index() {
      $pegawai = DB::table('pegawai')->get();

      $data = [
        'judul' => "Pegawai",
        'pegawai' => $pegawai,
      ];
      return view('pegawai/pegawai', $data);
    }
}
