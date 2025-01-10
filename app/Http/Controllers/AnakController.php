<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
  
        $anaks = Anak::paginate(10); 
        return view('anak.index', compact('anaks'));
    }

    public function create()
    {
        return view('anak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required',
            'alamat' => 'required',
        ]);

        Anak::create($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil ditambahkan.');
    }

    public function edit(Anak $anak)
    {
        return view('anak.edit', compact('anak'));
    }

    public function update(Request $request, Anak $anak)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required',
            'alamat' => 'required',
        ]);

        $anak->update($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil diperbarui.');
    }

    public function destroy(Anak $anak)
    {
        $anak->delete();
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil dihapus.');
    }
}
