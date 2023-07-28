<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PopulerController extends Controller
{
    public function populer()
    {
        return view('admin.populer');
    }
    
    public function insert(Request $request){
        Populer::create($request->all());

        return back();
    }
}
