<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
      DB::table("bilgiler")->insert([
        "metin"=>"bu örnek metin alanı"
      ]);
    }
    public function guncelle()
    {
      DB::table("bilgiler")->where("id",1)->updated([
        "metin"=>"Bu metin  güncellenmiştir."
      ]);
    }
    public function sil(){
      DB::table("bilgiler")->where("id",1)->delete();
    }
}
