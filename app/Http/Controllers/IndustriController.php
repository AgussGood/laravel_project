<?php
namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\jurusan;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industri = Industri::all();
        return view('admin/industri.index', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('admin/industri.create', compact('jurusan'));
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
            'nama_industri' => 'required|unique:industris',
            'id_jurusan'    => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
        ]);

        $industri                = new Industri;
        $industri->nama_industri = $request->nama_industri;
        $industri->id_jurusan    = $request->id_jurusan;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/industri', $name);
            $industri->foto = $name;
        }

        $industri->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('industri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $industri = Industri::findOrFail($id);
        return view('admin/industri.show', compact('industri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industri = Industri::findOrFail($id);
        $jurusan  = Jurusan::all();
        return view('admin/industri.edit', compact('industri', 'jurusan'));
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
            'nama_industri' => 'required',
            'id_jurusan'    => 'required',
            'foto'          => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $industri                = Industri::findOrFail($id);
        $industri->nama_industri = $request->nama_industri;
        $industri->id_jurusan    = $request->id_jurusan;

        if ($request->hasFile('foto')) {
            $industri->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/industri', $name);
            $industri->foto = $name;
        }

        $industri->save();

        session()->flash('success', 'Data berhasil dirubah');

        return redirect()->route('industri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industri = Industri::findOrFail($id);
        $industri->delete();
        return redirect()->route('industri.index')->with('success', 'Data Berhasil Dihapus');
    }
}
