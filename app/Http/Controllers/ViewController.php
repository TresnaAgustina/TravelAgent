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

    public function dashboard()
    {
        $admin = DB::table('users')->get();

        return view('admin.sub.Welcome',compact('admin'), [
            'title' => 'Dashboard'
        ]);
    }

    public function create()
    {
        return view('admin.sub.Create', [
            'title' => 'Create Post'
        ]);
    }
}
