<?php
namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = prestasi::all();
        return view('admin/prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/prestasi.create');
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
            'tgl_prestasi'  => 'required',
            'nama_prestasi' => 'required|unique:prestasis',
            'tingkat'       => 'required',
            'deskripsi'     => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
        ]);

        $prestasi                 = new Prestasi();
        $prestasi->tgl_prestasi = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat       = $request->tingkat;
        $prestasi->deskripsi     = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data Berhasil ditambahkan');
        return redirect()->route('prestasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin/prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $prestasi = Prestasi::findOrFail($id);
        return view('admin/prestasi.edit', compact('prestasi'));
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
            'tgl_prestasi' => 'required',
            'nama_prestasi' => 'required',
            'tingkat'       => 'required',
            'deskripsi'     => 'required',
            'foto'          => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $prestasi                = Prestasi::findOrFail($id);
        $prestasi->tgl_prestasi = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat       = $request->tingkat;
        $prestasi->deskripsi     = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $prestasi->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data Berhasil diedit');
        return redirect()->route('prestasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
