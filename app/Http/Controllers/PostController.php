<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sub.Create', [
            'title' => 'Create Post'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $code = $request->code;
        // $name = $request->name;
        // $desc = $request->description;
        // $categ = $request->category;
        // $price = $request->price;
        // $priceIn = $request->price_include;
        // $priceEx = $request->price_exlude;
        // $dest1 = $request->destination1;
        // $dest2 = $request->destination2;
        // $dest3 = $request->destination3;
        // $dest4 = $request->destination4;
        // $dest5 = $request->destination5;
        // $dest6 = $request->destination6;


         //store data to db user
       $posts = $request->validate([
            'image' => 'image | mimes:png,jpg,jpeg | max:2048',
            'code' => 'required | unique:posts',
            'name' => 'required | string | max:100',
            'description' => 'required | string',
            'category' => 'required | string | string',
            'price' => 'required | string',
            'price_include' => 'required |string',
            'price_exlude' => 'required |string',
            'destination1' => 'nullable | string',
            'destination2' => 'nullable | string',
            'destination3' => 'nullable | string',
            'destination4' => 'nullable | string',
            'destination5' => 'nullable | string',
            'destination6' => 'nullable | string'
        ]);

        
        if($request->hasFile('image')){
            $posts['image'] = $request->file('image')->store('posts');
        }else{
            $path = '';
        }

        DB::table('posts')->insert($posts);

        // $post = new Post;
        // $post->image = $path;
        // $post->code = $request->code;
        // $post->name = $request->name;
        // $post->description = $request->desc;
        // $post->category = $request->categ;
        // $post->price = $request->price;
        // $post->price_include = $request->priceIn;
        // $post->price_exlude = $request->priceEx;
        // $post->destination1 = $request->dest1;
        // $post->destination2 = $request->dest2;
        // $post->destination3 = $request->dest3;
        // $post->destination4 = $request->dest4;
        // $post->destination5 = $request->dest5;
        // $post->destination6 = $request->dest6;
        // $post->save();

    //    ddd();

    //    DB::table('post')->insert($validate);

    //    return back()->withErrors([
    //     'image' => 'please upload an image.',
    //     'code' => 'code format is incorrect',
    //     'name' => 'please check the format or length'
    //     ]);

       return redirect()->intended('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
