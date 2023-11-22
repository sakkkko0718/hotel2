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
}
