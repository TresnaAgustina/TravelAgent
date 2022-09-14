<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CreatePostController extends Controller
{
    public function store(Request $request){
        //store data to db user
        $validate = $request->validate([
            'package_img' => 'required | image | file | max:1024',
            'package_code' => 'required | unique:posts',
            'package_category' => 'required | string | string',
            'package_name' => 'required | string | max:100'
        ]);

        ddd();

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('ImagePost');
       }

       

       DB::table('posts')->insert($validate);

       return redirect()->intended('/home');
    }
}
