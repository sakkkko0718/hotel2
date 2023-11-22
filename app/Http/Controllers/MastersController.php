<?php

namespace App\Http\Controllers;

use App\Master;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(Request $request){
        $item = Master::all();
        return view('masters.index',['masters'=> $item]);
    }
}
