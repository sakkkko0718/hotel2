<?php

namespace App\Http\Controllers;

use App\Master;
use App\Reservation;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(Request $request){
        $item = Master::all();
        return view('masters.index',['masters'=> $item]);
    }

    public function search(Request $request){
        if(isset($request->room_name)){
            $data = Master::
                where('room_name','LIKE','$request->room_name%')
                ->get();
        } else {
            //何も検索しない時
            $data = Master::get();
        }

        return view('masters.index',['masters'=>$data]);
    }
}
