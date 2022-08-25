<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        return view('pages.Home',[
            'title' => 'Home'
        ]);
    }

    public function tour()
    {
        return view('pages.Tour',[
            'title' => 'Tour List'
        ]);
    }

    public function tourDetail()
    {
        return view('pages.TourDetail', [
            'title' => 'Package Name'
        ]);
    }
}
