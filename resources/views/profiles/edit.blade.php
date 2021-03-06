@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 60%;">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    <div class="row">
            <div class="col-8 offset-2">
            <h2>Edit Profile</h2>
            <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label ">Title</label>
        
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}"  autocomplete="title" autofocus>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <label for="description" class="col-md-4 col-form-label ">Profile description</label>
                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description}}" rows="4" autocomplete="description" autofocus>{{ old('description') ?? $user->profile->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div><br>
            <div class="row">
                <label for="url" class="col-md-4 col-form-label ">Url</label>
                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')?? $user->profile->url }}"  autocomplete="url" autofocus >
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div><br>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                <input type="file" class=" form-control-file" id="image" name="image">
                
                @error('image')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div><br>
            <div class="row">
                <button type="submit" class="btn btn-success col-4">Edit Profile</button>
            </div>
            </div>
 
       
        </div>
    </form>
</div>
@endsection
