<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', '>=', Carbon::today())
        ->orderBy('departure_date', 'asc')
        ->get();

        return view('index', compact('trains'));
    }
}
