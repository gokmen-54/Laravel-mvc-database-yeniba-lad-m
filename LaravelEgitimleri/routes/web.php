<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;


Route::get('/', function () {
    return view('welcome');
});

//route::get('/ornek',function(){return view('ornek');});
Route::get("/phpturkiye/{isim}",[ornek::class,'test']);

Route::get("/web",[Yonet::class,'site'])->name('web');

Route::get("/form",[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil",[Veritabaniislemleri::class,"sil"]);
