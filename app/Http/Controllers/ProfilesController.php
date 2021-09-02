<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\profile_user;
use Illuminate\Http\Request;
use Intervention\Image\facades\Image;
use Illuminate\Support\Facades\DB;
class ProfilesController extends Controller
{
    public function index(User $user)
    {
      
        $follows=(auth()->user())? auth()->user()->following->contains($user): false;
        return view('profiles.index',compact('user','follows'));
    }
    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title' =>'required',
            'description'=>'required',
            'url'=>'required',
            'image'=>'',
        ]);
        
        if(request('image')){
            $imagepath = request('image')->store('profile','public');
    
            $image =Image::make(public_path("storage/{$imagepath}"))->fit(1000,1000);
            $image->save();
            $imageArray = ['image'=>$imagepath];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }
  
}
