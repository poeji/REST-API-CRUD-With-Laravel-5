<?php
namespace App\Transformers;

use App\User;
use App\Transformers\PostTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
	
	protected $availableIncludes = [
		'posts'
	];

	public function transform(User $user)
	{

		return [
			'id'			=> $user->id,
			'name' 			=> $user->name,
			'email' 		=> $user->email,
			'registered' 	=> $user->created_at,
			'password' 		=> $user->password,
		];
	}

	public function includePosts(User $user) {
		$posts = $user->posts()->latestFirst()->get();

		return $this->collection($posts, new PostTransformer);
	}
}