<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->take(3)->get();
        return view('site.index',[
            "posts" => $posts
        ]);
    }

}
