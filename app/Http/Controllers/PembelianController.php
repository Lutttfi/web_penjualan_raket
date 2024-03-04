<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\pembelian;
use App\Models\petugas;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelians = Pembelian::all();
        $pembelis = Pembeli::all();
        $petugas = petugas::all();
        return view("pembelians.index", compact("pembelians"));
    }

    public function create()
    {
        $pembelis = Pembeli::all();
        $petugas = Petugas::all();
        return view('pembelians.create', ['pembelis' => $pembelis], ['petugas' => $petugas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'tanggal_pembelian' => 'required|date',
            'biaya' => 'required|numeric',
            'jumlah_pembelian' => 'required|integer',
            'id_pembeli' => 'required',
            'id_petugas' => 'required',
        ]);
        Pembelian::create($request->all());
        return redirect()->route('pembelians.index')->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $pembelians = Pembelian::findOrFail($id);
        return view('pembelians.show', compact('pembelians'));
    }

    public function edit($id)
    {
        $pembelians = Pembelian::findOrFail($id);
        return view('pembelians.edit', compact('pembelians'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'tanggal_pembelian' => 'required|date',
            'biaya' => 'required|numeric',
            'jumlah_pembelian' => 'required|integer',
            'id_pembeli' => 'required',
            'id_petugas' => 'required',
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update($request->all());

        return redirect()->route('pembelians.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $pembelians = Pembelian::findOrFail($id);
        $pembelians->delete();

        return redirect()->route('pembelians.index')->with('success', 'Data berhasil dihapus!');
    }
}

