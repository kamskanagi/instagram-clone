@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-3">
            <img src="/storage/{{$user->profile->image}}" alt="" style= "width: 100%; height: auto;" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pd-3"> 
                    <div> <h1>  {{$user->username}}</h1> </div>
                    <button class="btn btn-primary ml-4">Follow</button>  

                   
                </div>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit"> Edit Profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>23</strong> followers</div>
                <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->tittle ?? 'na' }}</div>
                <div class="">{{ $user->profile->description ?? 'na'}}</div>
                <div class=""><a href="">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
    </div>


    <div class="row pt-4 ">

                    @foreach ($user->posts as $post)
                            <div class="col-4">
                                <a href="/p/{{ $post->id}}">
                                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                                </a>
                            </div>
                    @endforeach
            

    </div>
</div>
@endsection
