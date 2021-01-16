<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    // will aloow  only the authenticated user to see this page
   public function __construct(){

    $this->middleware('auth');
   }

   public function index(){
      // return 
   }

    public function create(){

        return view('posts/create');
    }

    public function store(){

        //dd(request()->all());   // this will show you the sen inputs
        $data = request()->validate([  // in this line we are trying to validate the input field
            //'another' => '',
           'caption' => 'required',
            'image' => ['required','image'],

        ]);

        $image_path= request('image')->store('upload', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $image_path, 
            ]);

            return redirect('/profile/' . auth()->user()->id);

            $image = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200); //resizing the images
            $image->save();
      // \App\Models\Post::create($data);
       // return view('posts/create');

       //how to store 
      
    }


    public function show(\App\Models\Post $post)

    {
    // dd($post);
        return view('posts.show', compact('post'));
    }
}
