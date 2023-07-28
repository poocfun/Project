<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pekerjaan.index');
    }

    public function pesan()
    {
        return view('pekerjaan.pesan');
    }

    public function lamar()
    {
        $pekerjaan = Pekerjaan::with(['requirement', 'benefit'])->get();
        $data = array(
            'pekerjaan' => $pekerjaan,
        );
        return view('pekerjaan.lamar',$data);
    }

    public function info()
    {
        return view('pekerjaan.info');
    }




}
