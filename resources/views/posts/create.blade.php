@extends('layouts.app')

@section('content')

<div class="container">
  <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col offset-2"> 
                <div class="row">
                    <h1>Add a New Post</h1>
                </div>
                <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                        
                            <input id="caption" 
                                    type="text" id= "caption" 
                                    class="form-control @error('caption') is-invalid @enderror" 
                                    name="caption" value="{{ old('caption') }}" 
                                    required autocomplete="caption" autofocus>

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="row pt-3">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label><br>
                        <input type="file" class="form-contol-file" id= "image" name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row pt-5">
                        <button class="btn btn-primary">Add New Post</button>
                    </div>
        </div>

    </div>
  </form>
</div>

@endsection