<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PegawaiController extends Controller
{
    public function index() : View {
        // Mengambil semua data Pegawai, diurutkan berdasarkan ID terbaru, batasi sejumlah 10 data per halaman.
        $pegawais = Pegawai::with('departemen')->latest()->paginate(10);

        // Render view with pegawais
        return view('pegawais.index', compact('pegawais'));
    }

    public function create() : View {
        $departemens = Departemen::all();

        return view('pegawais.create', compact('departemens'));
    }

    public function store(Request $request) : RedirectResponse {
        // Validate form
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required|numeric',
            'departemen' => 'required',
            'alamat' => 'required'
        ]);

        // Create Pegawai
        Pegawai::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'usia' => $request->usia,
            'id_departemen' => $request->departemen,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pegawais.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit(string $id) : View {
        $pegawai = Pegawai::findOrFail($id);
        $departemens = Departemen::all();

        return view('pegawais.edit', compact('pegawai', 'departemens'));
    }

    public function update(Request $request, $id): RedirectResponse {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required|numeric',
            'alamat' => 'required',
            'departemen' => 'required'
        ]);

        $pegawai = Pegawai::findOrFail($id);

        $pegawai->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'usia' => $request->usia,
            'id_departemen' => $request->departemen,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pegawais.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id) : RedirectResponse {
        $pegawai = Pegawai::findOrFail($id);

        $pegawai->delete();

        return redirect()->route('pegawais.index')->with(['success' => 'Berhasil Menghapus']);
    }
}
