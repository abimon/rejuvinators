<?php

namespace App\Http\Controllers;

use App\Models\Audios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Video;
use App\Models\Post;

class mainController extends Controller
{
    function login(Request $req){
        $user= User::where(['username'=>$req->username]) ->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password is not matching";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/dashboard');
        }
    }
    function signup(Request $req){   
        
        //handle file upload
        if($req->hasFile('profile')){
            //file name with extension
            $filenameWithExt=$req->file('profile')->getClientOriginalName();
            //get just ext
            $extension=$req->file('profile')->getClientOriginalExtension();
            //file name only
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File name to store
            $filenametostore=$filename.'_'.time().'.'.$extension;   
            //upload
            $path=$req->file('profile')->storeAs('public/profile_images', $filenametostore);
        }
        else{
            $filenametostore='noimage.jpg';
        }
        $user= new User;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->contact=$req->contact;
        $user->role='User';
        $user->profile=$filenametostore;
        $user->password=hash::make($req->password);
        $user->save();
        $req->session()->put('user',$user);
        return redirect('/');
    }
    function dashboard(){
        $users=User::all();
        return view('dashboard',['users'=>$users]);
    }
    function upload_audio(Request $req){
        if($req->hasFile('audio')){
            //file name with extension
            $filename=$req->title;
            $filenametostore= time().$filename;
            //upload
            $path=$req->file('audio')->storeAs('public/music', $filenametostore);
        }
        $audio = new Audios;
        $audio->user_id=$req->user_id;
        $audio->title=$req->title;
        $audio->topic=$req->topic;
        $audio->date=$req->date;
        $audio->audio=$filenametostore;
        $audio->save();
        return redirect('dashboard');
    }
    function upload_video(Request $req){
        $video = new Video;
        $video->user_id=$req->user_id;
        $video->title=$req->title;
        $video->topic=$req->topic;
        $video->date=$req->date;
        $video->video=$req->url;
        $video->save();
        return redirect('dashboard');
    }
    function upload_post(Request $req){
        if($req->hasFile('image')){
            //file name with extension
            $filename=$req->title;
            $filenametostore= time().$filename;
            //upload
            $path=$req->file('image')->storeAs('public/music', $filenametostore);
        }
        $post = new Post;
        $post->user_id=$req->user_id;
        $post->title=$req->title;
        $post->topic=$req->topic;
        $post->date=$req->date;
        $post->post=$req->post;
        $post->image=$req->filenametostore;
        $post->save();
        return redirect('dashboard');
    }
    function music(){
        $music=Audios::all();
        return view('music', ['files'=>$music]);
    }
    function gallery(){
        $video=Video::all();
        return view('gallery', ['files'=>$video]);
    }

}
