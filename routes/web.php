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

// Route::get('/barang', function () {
//     $nama = ' TV 21 Inch';
//     $harga = '6000001';
//     return view('elektronik2.barang',compact('nama','harga'));
// });

// Route::get('/barang', function () {
//     $nama = 'Laptop';
//     $harga = [80,64,30,10,90,101];

//     return view('elektronik6.barang',compact('nama','harga'));
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
//                      "Lisa Permata"];

//     return view('jajal.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
//                  "Dr. Syahrial, M.Kom."];

//     return view('jajal.dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('jajal.gallery');
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
//                      "Lisa Permata"];

//     return view('coba2.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
//                  "Dr. Syahrial, M.Kom."];

//     return view('coba2.dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('coba2.gallery');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
//                      "Lisa Permata"];

//     return view('layout_extends.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
//                  "Dr. Syahrial, M.Kom."];

//     return view('layout_extends.dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('layout_extends.gallery');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
                     "Lisa Permata"];

    return view('layout_extends.mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
//                  "Dr. Syahrial, M.Kom."];

//     return view('layout_extends.dosen')->with('dosen', $arrDosen);
// });

// Route::get('layout_extends.gallery', function () {
//     return view('layout_extends.gallery');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
//                      "Lisa Permata"];

//     return view('CnS.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
//                  "Dr. Syahrial, M.Kom."];

//     return view('CnS.dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('CnS.gallery');
// });

// Route::get('admin', function () {
//     return view('CnS.admin');
// });



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
//                      "Lisa Permata"];
//     return view('name_route.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// })->name('mahasiswa');

// Route::get('/dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.",
//                  "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
//     return view('name_route.dosen')->with('dosen', $arrDosen);
// })->name('dosen');

// Route::get('/gallery', function () {
//     return view('name_route.gallery');
// })->name('gallery');

// Route::get('admin', function () {
//   return view('name_route.admin');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
                     "Lisa Permata"];

    return view('name_route_par.mahasiswa')->with('mahasiswa', $arrMahasiswa);
})->name('mahasiswa');

Route::get('dosen', function () {
    $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus",
                 "Dr. Syahrial, M.Kom."];

    return view('name_route_par.dosen')->with('dosen', $arrDosen);
})->name('dosen');

Route::get('gallery', function () {
    return view('name_route_par.gallery');
})->name('gallery');

Route::get('informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
    $data = [$fakultas, $jurusan];
    return view('name_route_par.informasi')->with('data', $data);
})->name('info');
