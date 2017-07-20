<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Transformers\UserTransformer;
use Auth;
//Class 'App\Transformers\UserTransformer' not found

class UserController extends Controller
{
    public function users(User $user) {

    	$users = $user->all();

    	//return response()->json($users);

    	return fractal()
    	->collection($users)
    	->transformWith(new UserTransformer)
    	->toArray();

    }

    public function profileById(User $user, $id)
    {
    	$user = $user->find($id);

    	return fractal()
    	->item($user)
    	->transformWith(new UserTransformer)
        ->includePosts()
    	->toArray();
    }
}
