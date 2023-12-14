<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>', Carbon::now())->get();
        return view("home", compact("trains"));
    }
}
