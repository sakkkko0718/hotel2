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
        if(!empty($request['input'])){
            //inputに入力した部屋の種類を取得
            $data = Master::getData($request['input']);
        } else {
            //何も検索しない時は全て取得
            $data = Master::get();
        }
        return view('masters.index',['masters' => $data]);
    }
}
