<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

use App\Transformers\PostTransformer;
use Auth;

class PostController extends Controller
{
    public function add(Request $request, Post $post) {
    	
    	$this->validate($request, [
    			'content' => 'required|min:10',
    		]);

    	$post = $post->create([
    		'user_id' => Auth::user()->id,
    		'content' => $request->content,
    		]);

    	$response = fractal()
    	->item($post)
    	->transformWith(new PostTransformer)
    	->toArray();

    	return response()->json($response, 201);
    }

    public function update(Request $request, Post $post) {
        $this->authorize('update', $post);

       $post->content = $request->get('content', $post->content);
       $post->save();

       return fractal()
       ->item($post)
       ->transformWith(new PostTransformer)
       ->toArray();
    }

    public function delete(Post $post) {
        $this->authorize('delete', $post);

        $post->delete();

        return response()->json([
            'message' => 'Post deleted'
            ]);
    }
}
