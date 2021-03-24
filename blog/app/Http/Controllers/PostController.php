<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Illuminate\Support\Facades\App;
use Dejurin\GoogleTranslateForFree;



class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        $tr = new GoogleTranslateForFree();
        return view('mainpage', compact('posts','tr'));
    }
    public function indexLang($locale){
        $tr = new GoogleTranslateForFree();
        App::setLocale($locale);
        $posts = Post::all();
        return view('blog', compact('posts','tr'));
    }
    public function onePost($id){
        $tr = new GoogleTranslateForFree();
        $item = Post::findOrFail($id);
        return view('onePost', compact('item','tr'));
    }
    public  function onePostLang($locale, $id){
        $tr = new GoogleTranslateForFree();
        App::setLocale($locale);
        $item = Post::findOrFail($id);
        return view('onePost', compact('item','tr'));
    }
}
