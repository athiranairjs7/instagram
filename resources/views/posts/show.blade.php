@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-7">
            <div class="d-flex align-items-center">
                <div>
                    <img style="max-width:35px" src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle w-100">
                </div>
                <div>
                    <h6  class="text-primary pl-3 pt-2"><a  class="text-dark" style="text-decoration: none;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h6>
                </div>
                <!-- <div>
                @can('updates',$user->profile)
                    <a href="" style="text-decoration: none;" class="pl-3 pt-1 text-sm">follow</a>
                    @endcan
                </div> -->
            </div>
<br>
            <p ><span  class="font-weight-bold pr-2" ><a class="text-dark" style="text-decoration: none;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>{{$post->caption}}</p>
        </div>
    </div> 

</div>
@endsection
