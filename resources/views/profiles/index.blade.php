@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script defer src="{{ mix('js/app.js') }}"></script>
@section('content')
<div class="container" style="max-width: 60%;">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle" width="150px" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-item-baseline ">
                <div class="d-flex pb-3">
                <div class="font-weight-bold" >{{ $user->username }}</div>
                @can('updates',$user->profile)
                <button class="btn btn-success ml-4 btn-sm" id="followBtn" onclick="followUsers()">follow</button>
                @endcan
              
                </div>
                @can('update',$user->profile)
                <a href="/p/create" style="text-decoration:none;" class="text-success pt-2">Add New Post</a>
                @endcan
                
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit" style="text-decoration:none;" class="text-info pt-2">Edit Profile</a>
            @endcan
            <div class="d-flex"id="load">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong>&nbsp;posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong>&nbsp;followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong>&nbsp;following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#" class="text-primary" style="text-decoration: none;">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-3">
       @foreach($user->posts as $post) 
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img  class='w-100' src="/storage/{{$post->image}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
  
</div>
@endsection
<input type="hidden" value=" {{$user->id}}" id="userid"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
     
     function followUsers(){
       var user_id = document.getElementById('userid').value;
        axios.post('/follow/'+user_id)
        .then(response=>{
           
        });
    }
    
</script>