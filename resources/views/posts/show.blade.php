@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-item-center">
                <div class="pr-3">
                    <img src="/storage/{{$post->user->profile->image}}" alt="" style= "max-width:40px; height: auto;" class="rounded-circle w-100">
                 </div>
               
                <div class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></div>
                
            </div>
            <hr>
                <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></span> {{$post->caption}}</p>
        </div>
    </div>
    
</div>  
@endsection