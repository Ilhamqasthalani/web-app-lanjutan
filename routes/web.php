<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use Carbon\Traits\Test;

Route::get("/nama", function () {
    return "Nama Saya <b>Ilham Qasthalani</b>";
});

Route::get('/angkatan', function () {
    return "Angkatan <b>2018</b>";
});

Route::get('/jurusan', function () {
    return "Jurusan <b> S1 Teknik Informatika</b>";
});

Route::get('/universitas', function () {
    return "Kuliah di <b> Universitas Muhammadiyah Kalimantan Timur</b>";
});

Route::get('/asal', function () {
    return "Saya berasal dari <b> Kota Samarinda</b>";
});


use App\Http\Controllers\IlhamController;

Route::get("/ilham/satu", [IlhamController::class, "satu"]);
Route::get("/ilham/dua", [IlhamController::class, "dua"]);
Route::get("/ilham/tiga", [IlhamController::class, "tiga"]);

use App\Http\Controllers\QasthalaniController;

Route::get("/qasthalani/one", [QasthalaniController::class, "one"]);
Route::get("/qasthalani/two", [QasthalaniController::class, "two"]);
Route::get("/qasthalani/three", [QasthalaniController::class, "three"]);
