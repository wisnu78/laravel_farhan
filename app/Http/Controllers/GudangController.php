<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function index(){
    	$gudangs = Gudang::all();
    	return response()->json($gudangs,200);
    }
}
