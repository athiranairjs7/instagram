@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-3 pt-3">
            <div class="d-flex align-items-center">
                <div><img style="max-width:35px" src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle w-100"></div>
                <div><h6  class="text-primary pl-3 pt-2"><a  class="text-dark" style="text-decoration: none;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h6></div>            
            </div><br>
            <p><span  class="font-weight-bold pr-2" ><a class="text-dark" style="text-decoration: none;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>{{$post->caption}}</p>
        </div>
    </div> 
    @endforeach
    <div class="row">
        <div class="col-6 d-flex justify-content-center offset-3" style="width: 10%;">
            {{$posts->onEachSide(5)->links()}}
        </div>
    </div>
</div>
@endsection
