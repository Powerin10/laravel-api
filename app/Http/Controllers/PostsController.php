<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function createPost(Request $request)
    {
    	$post= Post::create($request->all());
    	return response()->json($post);
    }

    public function updatePost(Request $request, $id)
    {
    	$post = POST::find($id);
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->views = $request->views;
    }


    public function viewPost($id){
        $post  = Post::find($id);
        
 
        return response()->json($post);
    }
    
    public function deletePost($id)
    {
    	$post = Post::find($id);
    	$post->delete();

    	return response()->json('removed Suceessfully');
    }

    public function index()
    {
        // return 'dasd';
    	$post = Post::all();
    	return response()->json($post);
    }
}
