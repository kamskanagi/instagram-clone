<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller
{
    //

    public function index($user)
    {
       // dd(User::find($user));
       $user= User::findOrFail($user);  // this will find the user
        return view('profiles/index', ['user' => $user, ]);
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);

        return view('profiles/edit', compact('user'));
    }

    public function update(User $user){

        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'tittle' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

       // auth()->user()->profile->update($data);
        
        return redirect("/profile/{$user->id}");
    }
}
