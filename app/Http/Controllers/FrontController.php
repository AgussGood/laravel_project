<?php
namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Fasilitas;
use App\Models\Industri;
use App\Models\Informasi;
use App\Models\Jurusan;
use App\Models\Karyawan;
use App\Models\Prestasi;

class FrontController extends Controller
{

    public function index()
    {
        $informasi = Informasi::take(3)->latest()->get();
        $karyawan  = Karyawan::take(4)->latest()->get();
        $eskul     = Eskul::all();
        $fasilitas = Fasilitas::all();
        $jurusan   = Jurusan::all();
        $industri  = Industri::all();
        $prestasi  = Prestasi::all();

        return view('welcome', compact('informasi', 'karyawan', 'eskul', 'fasilitas', 'jurusan', 'industri', 'prestasi'));

    }

    public function jurusan()
    {
        $jurusan = Jurusan::orderBy('id','desc')->get();
        return view('jurusan', compact('jurusan'));
    }

    public function guru()
    {
        $karyawan = Karyawan::orderBy('id','desc')->get();
        return view('guru', compact('karyawan'));
    }

    public function eskul()
    {
        $eskul = Eskul::orderBy('id','desc')->get();
        return view('eskul', compact('eskul'));
    }

    public function informasi()
    {
        $informasi = Informasi::orderBy('id','desc')->get();
        return view('informasi', compact('informasi'));
    }

    public function informasid($id)
    {
        $informasi = Informasi::FindorFail($id);
        return view('informasid', compact('informasi'));
    }

    public function jurusand($id)
    {
        $jurusan = Jurusan::FindorFail($id);
        $industri = Industri::where('id_jurusan', $id)->get();
        return view('jurusand', compact('jurusan','industri'));
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::orderBy('id','desc')->get();
        return view('fasilitas', compact('fasilitas'));
    }

    public function prestasi()
    {
        $prestasi = Prestasi::orderBy('id','desc')->get();
        return view('prestasi', compact('prestasi'));
    }

}
