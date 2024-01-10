<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
class GudangController extends Controller
{
    public function index()
    {
        $gudangs= Gudang::all();
        return view('gudang.index', compact('gudangs'));
    }

    public function create()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        Gudang::create($request->all());
        return redirect()->route('gudang.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gudang = Gudang::find($id);
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        Gudang::find($id)->update($request->all());
        return redirect()->route('gudang.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Gudang::find($id)->delete();
        return redirect()->route('gudang.index')->with('success', 'Data berhasil dihapus');
    }
}