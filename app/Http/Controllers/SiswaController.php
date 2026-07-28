<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // READ: Tampil Semua Data
    public function index()
    {
        $siswas = Siswa::latest()->get();
        return view('siswas.index', compact('siswas'));
    }

    // CREATE: Form Tambah
    public function create()
    {
        return view('siswas.create');
    }

    // CREATE: Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // UPDATE: Form Edit
    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    // UPDATE: Simpan Perubahan
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    // DELETE: Hapus Data
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}