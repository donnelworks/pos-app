<?php

namespace App\Http\Controllers\utilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index() {
      $data = [
        'judul' => "User",
      ];
      return view('utilitas/user', $data);
    }
}
