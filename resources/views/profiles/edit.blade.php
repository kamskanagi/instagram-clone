@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH') 
            <div class="row">
                <div class="col-8 offset-2">
    
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="tittle" class="col-md-4 col-form-label">tittle</label>
    
                        <input id="tittle"
                               type="text"
                               class="form-control{{ $errors->has('tittle') ? ' is-invalid' : '' }}"
                               name="tittle"
                               value="{{ old('tittle') ?? $user->profile->tittle ?? 'na'}}"
                               autocomplete="tittle" autofocus>
    
                        @if ($errors->has('tittle'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tittle') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>
        
                            <input id="description"
                                   type="text"
                                   class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                   name="description"
                                   value="{{ old('description') ?? $user->profile->description ?? 'na'}}"
                                   autocomplete="description" autofocus>
        
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label">URL</label>
        
                            <input id="url"
                                   type="text"
                                   class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                   name="url"
                                   value="{{ old('url') ?? $user->profile->url ?? 'na'}}"
                                   autocomplete="url" autofocus>
        
                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

    
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profiel Image</label>
    
                        <input type="file" class="form-control-file" id="image" name="image">
    
                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>
    
                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>
    
                </div>
            </div>
        </form>
</div>
@endsection
