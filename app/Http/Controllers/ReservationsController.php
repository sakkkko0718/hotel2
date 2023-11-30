<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index(Request $request){
        $item = Reservation::all();
        // dd($item[0]->room);
        // $data = Reservation::with('guests')->get();
        return view('reservations.index',['reservations'=> $item]);
    }

    public function search(Request $request){
        if(!empty($request['from']) &&! empty($request['until'])){
            //fromとuntilに入力した日付を取得
            $data = Reservation::getData($request['from'],$request['until']);
        } else {
            //何も検索しない時は全て取得
            $data = Reservation::get();
        }

        return view('reservations.index',['reservations' => $data]);
    }
}
