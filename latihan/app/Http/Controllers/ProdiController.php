<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listprodi = Prodi::get();
        return view("prodi.index", ['listprodi' => $listprodi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prodi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:20',
            'kode_prodi' => 'required|min:2|max:5',
        ]);

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->kode_prodi = $validateData['kode_prodi'];
        $prodi->save();

        return redirect('prodi')->with('status', 'Data Program Studi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.detail', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:20',
            'kode_prodi' => 'required|min:2|max:5',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update($validateData);

        return redirect('/prodi')->with('status', 'Data Program Studi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        return redirect('/prodi')->with('status', 'Data Program Studi berhasil dihapus');
    }
}
