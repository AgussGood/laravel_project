<?php
namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('admin/jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/jurusan.create');
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
            'nama_jurusan' => 'required|unique:jurusans',
            'deskripsi'     => 'required',
            'foto'         => 'required|mimes:jpg,png|max:10024',
        ]);

        $jurusan               = new Jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi = $request->deskripsi;


        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/jurusan', $name);
            $jurusan->foto = $name;
        }

        $jurusan->save();
        session()->flash('success', 'Data Berhasil ditambahkan');
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('admin/jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('admin/jurusan.edit', compact('jurusan'));
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
            'nama_jurusan' => 'required',
            'deskripsi'     => 'required',
            'foto'       => 'nullable|mimes:jpg,png|max:10024',
        ]);

        $jurusan               = Jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $jurusan->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/jurusan', $name);
            $jurusan->foto = $name;
        }

        $jurusan->save();
        session()->flash('success', 'Data Berhasil diedit');
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }
}
