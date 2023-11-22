<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(Request $request){
        $item = Room::all();
        return view('rooms.index',['rooms'=>$item]);
    }

}
