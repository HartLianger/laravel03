<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/coba', function () {
//    return view('elektronik.coba',
//    [
//        "coba01" => "Speaker",
//        "coba02" => "AC",
//        "coba03" => "Mesin Cuci",
//    ]);
//});

//Route::get('/coba', function () {
//
//    $arrcoba = [
//        "coba01" => "Speaker",
//        "coba02" => "AC",
//        "coba03" => "Mesin Cuci",
//    ];
//return view('elektronik.coba', $arrcoba);
//});

//route::get('/coba', function(){
//    $arrcoba2 = ["Speaker2","AC2","Mesin Cuci2","jam2","cahrger2"];
//return view ('elektronik.coba2',['coba2' => $arrcoba2]);
//});


//route::get('/coba', function(){
//    $arrcoba3 = ["Speaker2","AC2","Mesin Cuci2","jam2","cahrger2"];
//return view ('elektronik.coba3',['coba3' => $arrcoba3]);
//});

//route::get('/coba',function (){
//    return view ('elektronik.cobaw')->with('barang01','TV');
//});

// route::get('/coba', function(){
//         $arrcobawf = ["Speaker2","AC2","Mesin Cuci2","jam2","cahrger2","gerwf"];
//     return view ('elektronik.cobawf')->with('cobawf', $arrcobawf);
//     });

// Route::get('/barang', function () {
//     $arrbarang = ["AC","TV","Radio", "HP"];
//     return view('elektronik.barang',['barang' => $arrbarang]);
// });

Route::get('/barang', function () {
    $nama = ' TV 21 Inch';
    $harga = '1000001';
    return view('elektronik3.barang',compact('nama','harga'));
});
