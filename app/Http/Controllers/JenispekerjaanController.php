<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Models\Lamar;
use App\Models\Benefit;
use App\Models\Populer;
use App\Models\Pekerjaan;
use App\Models\Requirement;
use Illuminate\Http\Request;

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





    public function populer()
    {
        $data = Populer::all();
        return view('admin.populer', compact('data'));
    }
    public function delete_populer($id){
        $data = Populer::findorfail($id);
        $data->delete();
        return back();
    }





    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'namapt' => 'required',
            'kebutuhan' => 'required|numeric',
            'lokasi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk tipe file dan ukuran maksimum
        ]);

        $namaPT = $request->input('namapt');
        $kebutuhan = $request->input('kebutuhan');
        $deskripsi = $request->input('deskripsi');
        $lokasi = $request->input('lokasi');

        // Upload file jika ada
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // Mengambil ekstensi asli file
            $fileName = time() . '.' . $extension; // Menambahkan timestamp agar nama file unik
            $file->storeAs('pekerjaan', $fileName, 'public');
        }


        // Simpan data ke database
        $populer = new Populer();
        $populer->namapt = $namaPT;
        $populer->kebutuhan = $kebutuhan;
        $populer->deskripsi = $deskripsi;
        $populer->lokasi = $lokasi;
        if ($request->hasFile('image')) {
            $populer->image = $fileName;
        }
        $populer->save();

        return redirect()->back()->with('success', 'Populer data has successfully added');
    }

    public function update_populer($id){
        $data = Populer::findorfail($id);
        return view('admin.lowongan_crud.edit_populer', compact('data'));
    }
    public function show_populer($id){
        $data = Populer::find($id);
        return view('admin.lowongan_crud.show_populer', compact('data'));
    }

    public function procces_update_populer(Request $request, $id){
        $data = Populer::find($id);

        $data->update($request->all());


        return redirect('populer');
    }

    // Page admin user
    public function user()
    {   $data = User::all();
        return view('admin.user', compact('data'));
    }
    public function edit_user($id){
        $data = User::find($id);
        return view('admin.lowongan_crud.edit_user', compact('data'));
    }
    public function update_user(Request $request,$id)
    {
        $data = user::findOrfail($id);

        $data->update($request->all());

        return redirect('user')->with('success', 'Data user berhasil diupdate');
     }

    public function hapus($id){
        $data = User::findorfail($id);

        $data->delete($id);

        return back();
    }
    public function insert_user(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'user',
            'password' => bcrypt('password')
        ]);
        return redirect()->back();
    }



    public function formulir()
    {   $data = Lamar::all();
        return view('admin.formulir', compact('data'));
    }
    public function delete_form($id){
        $data = Lamar::find($id);
        $data->delete($id);

        return redirect()->back();
    }
    public function show_form($id){
        $data = Lamar::find($id);

        return view('admin.lowongan_crud.show_formulir', compact('data'));
    }

}
