<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('departure_time', '>=', Carbon::today())
        ->orderBy('departure_time', 'asc')
        ->get();

        return view('index', compact('trains'));
    }
}
