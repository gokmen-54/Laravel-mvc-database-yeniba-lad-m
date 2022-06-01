<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
    $data["yazi1"]="php türkiye";
    $data["yazi2"]="web sitemize hoş geldiniz";
    $data["yazi3"]="Hizmetlerimiz";
    $data["yazi4"]="web tasarim ve yazılım hizmetleri";
    $data["yazi5"]="Bize Ulaşın";
      return view('web',$data);
    }
}
