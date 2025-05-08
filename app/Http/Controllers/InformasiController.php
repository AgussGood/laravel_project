<?php
namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'judul'     => 'required|unique:informasis',
            'deskripsi' => 'required',
            'foto'      => 'required|mimes:jpg,png|max:1024',
        ]);

        $informasi            = new Informasi();
        $informasi->judul     = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/informasi', $name);
            $informasi->foto = $name;
        }

        $informasi->save();
        session()->flash('success', 'Data Berhasil ditambahkan');
        return redirect()->route('informasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('informasi.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'judul'      => 'required',
            'deskripsi'  => 'required',
            'foto'       => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $informasi            = Informasi::findOrFail($id);
        $informasi->judul     = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $informasi->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/informasi', $name);
            $informasi->foto = $name;
        }

        $informasi->save();
        session()->flash('success', 'Data Berhasil diedit');
        return redirect()->route('informasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->route('informasi.index');
    }
}
