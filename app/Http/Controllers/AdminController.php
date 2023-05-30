<?php

namespace App\Http\Controllers;

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
        return view('pekerjaan.lamar');
    }

    public function info()
    {
        return view('pekerjaan.info');
    }
}
