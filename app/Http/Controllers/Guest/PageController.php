<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
        {
            $trains = Train::all();
            // dd(nostromodel con la s);
            return view('welcome', compact('trains'));
        }
}
