<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
	public function update($id){
		$barang = Barang::find($id);
		$barang->in = null;
		$barang->out = 1;
		$barang->update();
		// $barangs = Barang::whereNotNull("out")->with("gudang")->get();
		return response()->json(['status'=>'Data berhasil di buat'],200);
	}
	public function index($id){
		if($id == 1){

			$barangs = Barang::whereNotNull("in")->with("gudang")->get();
		}elseif($id == 2){
			
			$barangs = Barang::whereNotNull("out")->with("gudang")->get();
		}

		return response()->json($barangs,200);
	}
    public function store(Request $request){

    	// return response()->json(["req"=>$request->all()]);

    	$barang = new Barang;
    	$barang->name 		= $request->name;
    	$barang->gudang_id 	= $request->gudang_id;
    	if($request->param == 1){
    		$barang->in = $request->param;
    	}elseif($request->param == 2){
    		$barang->out = $request->param;
    	}

    	$barang->save();

    	return response()->json([
    		"status"	=> "Data berhasil di buat"
    	],200);
    }
}
