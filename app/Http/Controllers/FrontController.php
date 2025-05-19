<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Karyawan;
use App\Models\Eskul;
use App\Models\Fasilitas;
use App\Models\Jurusan;
use App\Models\Industri;
use App\Models\Prestasi;


class FrontController extends Controller
{

    public function index() {
        $informasi = Informasi::all();
        $karyawan = Karyawan::all();
        $eskul = Eskul::all();
        $fasilitas = Fasilitas::all();
        $jurusan = Jurusan::all();
        $industri = Industri::all();
        $prestasi = Prestasi::all();

        return view('welcome', compact('informasi','karyawan','eskul','fasilitas','jurusan','industri','prestasi'));

    }

    public function jurusan() {
        $jurusan = Jurusan::all();
        return view('welcome', compact('jurusan'));
    }
}
