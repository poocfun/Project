<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Requirement;

class PekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaan = Pekerjaan::with('requirement')->get();
        $data = array(
            'pekerjaan' => $pekerjaan,
        );
        return view('pekerjaan.index', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:100',
            'start_gaji' => 'required',
            'last_gaji' => 'required',
            'deskripsi' => 'nullable',
            'pendidikan' => 'nullable',
            'jeniskelamin' => 'nullable',
            'usia' => 'nullable',
            'lokasi' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        $pekerjaan = new Pekerjaan;
        $pekerjaan->judul = $validatedData['judul'];
        $pekerjaan->start_gaji = $validatedData['start_gaji'];
        $pekerjaan->last_gaji = $validatedData['last_gaji'];
        $pekerjaan->deskripsi = $validatedData['deskripsi'];
        $pekerjaan->pendidikan = $validatedData['pendidikan'];
        $pekerjaan->jeniskelamin = $validatedData['jeniskelamin'];
        $pekerjaan->usia = $validatedData['usia'];
        $pekerjaan->lokasi = $validatedData['lokasi'];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/pekerjaan');
            $pekerjaan->image = basename($path);
            $url = url('storage/' . $path);
        }
        $pekerjaan->save();

        if (!empty($request->input('kualifikasi')) && !empty($request->input('deskripsi_kualifikasi'))) {
            $pekerjaanKualifikasi = $request->input('kualifikasi');
            $pekerjaanDeskripsi = $request->input('deskripsi_kualifikasi');
            $kualifikasiCount = count($pekerjaanKualifikasi);

            for ($i = 0; $i < $kualifikasiCount; $i++) {
                $kualifikasi = new Requirement;
                $kualifikasi->kualifikasi = $pekerjaanKualifikasi[$i];
                $kualifikasi->deskripsi = $pekerjaanDeskripsi[$i];
                $kualifikasi->pekerjaan_id = $pekerjaan->id;
                $kualifikasi->save();
            }
        }

        return redirect()->back()->with('success', 'Data pekerjaan berhasil ditambah');

    }

    public function show($id)
    {
        $pekerjaan = Pekerjaan::with('requirement')->findOrFail($id);

        $data = [
            'pekerjaan' => $pekerjaan
        ];
        return view('pekerjaan.info', $data);
    }
}
