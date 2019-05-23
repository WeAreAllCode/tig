<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\Post as PostResource;

class PostController extends Controller
{
	// Show All Posts
	public function index()
	{
		// Get the posts
		$posts = Post::paginate(5);

		// Return collection of posts as a resource
		return PostResource::collection($posts);
	}

	// Create New Post Form
	public function create()
	{
		//
	}

	// Store or Update a Post
	public function store(Request $request)
	{
		//  Allow for post update *or* create a new post
		$post        		= $request->isMethod('put') ? Post::findOrFail($request->id) : new Post;
		$post->id 			= $request->input('id');
		$post->title 		= $request->input('title');
		$post->slug 		= $request->input('slug');
		$post->sub_title	= $request->input('sub_title)');
		$post->body 		= $request->input('body');
		$post->is_published = $request->input('is_published');
		$post->user_id 		= $request->input('user_id');
		$post->category_id 	= $request->input('category_id');

		if ($post->save()) {
			return new PostResource($post);
		}
	}

	// Show One Post
	public function show(Post $post)
	{
		// Return a single post as a resource
		return new PostResource($post);
	}

	// Delete a Post
	public function destroy(Post $post)
	{
		if ($post->delete()) {
			return new PostResource($post);
		}
	}
}
