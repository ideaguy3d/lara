<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($slug) {
        $posts = \DB::table('posts')->where('slug', $slug)->first();
        //dd($post);
        
        if(!array_key_exists($slug, $posts)) {
            abort(404, "$slug does NOT exist");
        }
        
        return view('post', ['post' => $posts[$slug]]);
    }
}
