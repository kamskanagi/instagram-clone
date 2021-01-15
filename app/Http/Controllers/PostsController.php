<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    public function create(){

        return view('posts/create');
    }

    public function store(){

        //dd(request()->all());   // this will show you the sen inputs
        $data = request()->validate([  // in this line we are trying to validate the input field
            'another' => '',
            'caption'=>'required',
            'image'=>['required','image'],

        ]);
       // auth()->user()->posts()->create($data);
      // \App\Models\Post::create($data);

       //dd(request()->all());
       // return view('posts/create');

       //how to store 
       $data['user_id'] = Auth::id();

       $post = Post::create($data);
       
    }
}
