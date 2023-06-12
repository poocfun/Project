<?php

namespace App\Http\Controllers;

use App\Models\Lamar;
use Illuminate\Http\Request;
use Auth;
class LamarController extends Controller
{
    public function info()
    {
        $pekerjaan = Lamar::with('lamar')->get();
        $data = array(
            'lamar' => $lamar,
        );
        return view('lamar.info', $data);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pekerjaan_id' => 'required',
            'pengalaman' => 'nullable',
            'pendidikan' => 'nullable',
            'dokumen' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        $lamar = new Lamar;
        // $lamar->user_id = Auth::user()->id;
        $lamar->user_id = '1';
        $lamar->pekerjaan_id = $validatedData['pekerjaan_id'];
        $lamar->pengalaman = $validatedData['pengalaman'];
        $lamar->pendidikan = $validatedData['pendidikan'];
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $path = $file->store('public/lamar');
            $lamar->dokumen = basename($path);
            $url = url('storage/' . $path);
        }
        $lamar->save();

        return redirect()->back()->with('success', 'Data pekerjaan berhasil ditambah');

    }
}
