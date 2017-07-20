<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $fillable = [
    	'user_id', 'content'
    ];

    public function scopeLatestFirst($query) {
    	return $query->orderBy('id', 'DESC');
    }

    public function user() {
		return $this->belongsTo(User::class);
	}	

}
