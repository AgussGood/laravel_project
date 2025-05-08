<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class FrontController extends Controller
{
    public function index() {
        $informasi = Informasi::all();
        return view('welcome', compact('informasi'));
    }
}
