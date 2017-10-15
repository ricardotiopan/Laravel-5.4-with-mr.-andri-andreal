<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang as mbarang;

class BarangController extends Controller
{
    public function form_input()
    {
    	return view('form_input');
    }


     public function input_barang(Request $wkwk)
    {

    	$this::validate($wkwk,[
    		'nbarang'=>'required|max:30',
    		'harga'=>'required|numeric',
    		'jumlah'=>'required|numeric',
    		'tanggal_beli'=>'required|max:20',
    		'status'=>'required',
            

    	]);

    	$dbarang = new mbarang;
    	$dbarang->nama_barang = $wkwk->nbarang ;
    	$dbarang->harga= $wkwk->harga ;
    	$dbarang->jumlah= $wkwk->jumlah ;
    	$dbarang->tanggal_beli= $wkwk->tanggal_beli ;
    	$dbarang->status= $wkwk->status ;
    	$dbarang->save();

    	return redirect('/barang/input')->with('session','Sukses!');

    }
}
