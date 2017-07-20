<?php
namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
	public function transform(Post $post)
	{
		return [
			'id' 			=> $post->id,
			'content' 		=> $post->content,
			'published' 	=> $post->created_at,
		];
		
	}
}