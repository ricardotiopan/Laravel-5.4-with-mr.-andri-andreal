<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mmahasiswa;

class mahasiswaController extends Controller
{
    public function ambil_data()
    {
    	$qmahasiswa = mmahasiswa::all();

    	return view('view_mahasiswa')->with('dmahasiswa',$qmahasiswa);
    }
}
