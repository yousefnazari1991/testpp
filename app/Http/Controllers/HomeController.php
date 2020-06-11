<?php

namespace App\Http\Controllers;

use App\Rezome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $re=Rezome::where('userId',auth()->user()->id)->get();
        return view('home',compact('re'));
    }
}
