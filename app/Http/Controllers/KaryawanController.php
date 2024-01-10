<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $karyawan = new Karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->gaji = $request->gaji;
    
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_karyawan');
            $karyawan->foto = basename($fotoPath);
        }
    
        $karyawan->save();
    
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
    }
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->gaji = $request->gaji;
    
        if ($request->hasFile('foto')) {
            Storage::delete('public/foto_karyawan/' . $karyawan->foto);
            $fotoPath = $request->file('foto')->store('public/foto_karyawan');
            $karyawan->foto = basename($fotoPath);
        }
    
        $karyawan->save();
    
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui');
    }
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil dihapus');
    }
}