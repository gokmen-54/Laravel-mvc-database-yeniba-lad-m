<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ornek extends Controller
{
    function test($isim) {
      return view('ornek',['ad'=>$isim]);
    }
}
