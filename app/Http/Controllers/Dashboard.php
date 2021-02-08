<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index() {
      $data = [
        'judul' => "Dashboard",
      ];
      return view('dashboard', $data);
    }
}
