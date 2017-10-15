<?php

namespace App\Http\Controllers\pegawai\lab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailController extends Controller
{
   
   function tampil()
   {
   		return view('detail');
   }

   function profile()
   {
   		return view('siswa.profil');
   }


}
