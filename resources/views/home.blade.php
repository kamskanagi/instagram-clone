@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-3">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" alt="" style= "width: 100%; height: auto;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>  {{ $user->username}}</h1>
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong> posts</div>
                <div class="pr-3"><strong>23</strong> followers</div>
                <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div>
                <div class="pt-4 font-weight-bold">title</div>
                <div class=""><a href="">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
    </div>


    <div class="row pt-4">
        <div class="col-4">
                <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
                <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" alt="" style= "width: 100%; height: auto;">
        </div>
        <div class="col-4">
                <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" alt="" style= "width: 100%; height: auto;">
        </div>

    </div>
</div>
@endsection
