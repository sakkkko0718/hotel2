<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    public function index(Request $request)
    {
        $item = Guest::all();
        return view('guests.index', ['guests' => $item]);
    }

    public function search(Request $request){
        if(!empty($request['input'])){
            //inputに入力した部屋の種類を取得
            $data = Guest::getData($request['input']);
        } else {
            //何も検索しない時は全て取得
            $data = Guest::get();
        }
        return view('guests.index',['guests' => $data]);
    }
}
