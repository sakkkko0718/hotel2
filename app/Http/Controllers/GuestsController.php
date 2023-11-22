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
}
