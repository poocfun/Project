<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Benefit;
use App\Models\Requirement;
use Validator;
class JenispekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaan = Pekerjaan::with(['requirement', 'benefit'])->get();
        $data = array(
            'pekerjaan' => $pekerjaan,
        );
        return view('admin.lowongan', $data);
    }

    public function show($id)
    {
        $pekerjaan = Pekerjaan::with(['requirement', 'benefit'])->findOrFail($id);

        $data = [
            'pekerjaan' => $pekerjaan
        ];
        return view('admin.lowongan_crud.show', $data);
    }

    public function edit($id)
    {
        $pekerjaan = Pekerjaan::with(['requirement', 'benefit'])->findOrFail($id);
        $data = [
            'pekerjaan' => $pekerjaan
        ];
        return view('admin.lowongan_crud.edit', $data);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'judul' => 'required',
            'jenis_pekerjaan' => 'required',
            'kebutuhan' => 'required',
            'nama_pt' => 'required',
            'deskripsi' => 'required',
            'pendidikan' => 'required',
            'start_gaji' => 'required',
            'last_gaji' => 'required',
            'jeniskelamin' => 'required',
            'usia' => 'required',
            'lokasi' => 'required',
            'image' => 'required',
            'benefit' => 'required',
            'requirement' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->judul = $request->judul;
        $pekerjaan->jenis_pekerjaan = $request->jenis_pekerjaan;
        $pekerjaan->kebutuhan = $request->kebutuhan;
        $pekerjaan->nama_pt = $request->nama_pt;
        $pekerjaan->deskripsi = $request->deskripsi;
        $pekerjaan->pendidikan = $request->pendidikan;
        $pekerjaan->start_gaji = $request->start_gaji;
        $pekerjaan->last_gaji = $request->last_gaji;
        $pekerjaan->jeniskelamin = $request->jeniskelamin;
        $pekerjaan->usia = $request->usia;
        $pekerjaan->lokasi = $request->lokasi;
        $pekerjaan->image = $request->image;

        $pekerjaan->save();

        // Update benefit
        foreach ($request->input('benefit') as $benefitId => $benefitValue) {
            $benefit = Benefit::find($benefitId);
            if ($benefit) {
                $benefit->benefit = $benefitValue;
                $benefit->save();
            }
        }
        // Update requirement
        $requirement = Requirement::where('pekerjaan_id', $pekerjaan->id)->first();

        if ($requirement) {
        if ($request->has('requirement') && $request->requirement !== null) {
            $requirement->kualifikasi = $request->requirement;
        } else {
            $requirement->kualifikasi = ''; // Mengatur nilai default jika kualifikasi bernilai null
        }

        $requirement->save();
        }

        return redirect('/pekerjaan')->with('success', 'Data pekerjaan berhasil diupdate');



    }


    public function destroy($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $pekerjaan->delete();

        return redirect()->back()->with('success', 'Data pekerjaan berhasil dihapus');
    }



    public function admin()
    {
        return view('admin.admin');
    }

    public function lowongan()
    {
        return view('admin.lowongan');
    }


}
