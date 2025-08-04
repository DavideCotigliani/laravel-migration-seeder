<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $oggi = Carbon::today()->toDateString(); //data di oggi in formato stringa

        $treni = Train::whereDate('data_partenza', '>=', $oggi)->orderBy("orario_partenza")->get();


        return view('home', compact("treni"));
    }
}
