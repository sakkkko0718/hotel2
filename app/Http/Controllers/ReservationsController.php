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
        // $from = $request->input('from');
        // $until = $request->input('until');
        if(!empty($request['from']) &&! empty($request['until'])){
            $data = Reservation::getData($request['from'],$request['until']);
        } else {
            //何も検索しない時
            $data = Reservation::get();
        }

        return view('reservations.index',['reservations' => $data]);
    }
}
