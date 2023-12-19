<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index()
    {
        // 処理
        $posts = DB::table('posts')->get();
        dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }
}
