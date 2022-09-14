<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        $posts = DB::table('posts')
        ->orderBy('id', 'desc')
        ->limit(4)
        ->get();

        return view('pages.Home', compact('posts'),[
            'title' => 'Home'
        ]);
    }

    public function tour()
    {
        $posts = DB::table('posts')
        ->orderBy('id', 'desc')
        ->get();

        return view('pages.Tour', compact('posts'),[
            'title' => 'Tour List'
        ]);
    }

    public function tourDetail(Int $code)
    {
        $posts = DB::table('posts')
        ->where('code', $code)
        ->get();

        return view('pages.TourDetail', compact('posts'), [
            'title' => 'package name'
        ]);
    }

    public function dashboard()
    {
        $posts = DB::table('posts')
        ->orderBy('code', 'asc')
        ->get();

        return view('admin.sub.Welcome',compact('posts'), [
            'title' => 'Dashboard'
        ]);
    }
}
