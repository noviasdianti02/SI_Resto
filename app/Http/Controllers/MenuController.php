<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menu = new Menu;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;
        
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_menu');
            $menu->foto = basename($fotoPath);
        }
        $menu->save();
        return redirect()->route('menu.index')
            ->with('success', 'Menu Berhasil ditambahkan!');
    }

    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
{
    $request->validate([
        'nama_menu' => 'required',
        'harga' => 'required|numeric',
        'deskripsi' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Dapatkan path foto yang sudah ada
    $existingFotoPath = $menu->foto;

    // Perbarui atribut menu
    $menu->update([
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
    ]);

    // Periksa jika file baru diberikan
    if ($request->hasFile('foto')) {
        // Unggah file baru
        $newFotoPath = $request->file('foto')->store('public/foto_menu');

        // Perbarui atribut foto dengan nama file baru
        $menu->update(['foto' => basename($newFotoPath)]);

        // Hapus file lama
        if ($existingFotoPath) {
            Storage::delete('public/foto_menu/' . $existingFotoPath);
        }
    }

    return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
}


    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')
            ->with('success', 'Menu deleted successfully');
    }
}