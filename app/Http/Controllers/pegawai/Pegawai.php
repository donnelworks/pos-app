<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pegawai extends Controller
{
    public function index() {
      $data = [
        'judul' => "Pegawai",
      ];
      return view('pegawai/Pegawai', $data);
    }
}
