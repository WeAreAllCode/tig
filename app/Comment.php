<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // RELATIONSHIPS - START
    public function post() {
		return $this->belongsTo(Post::class)->withDefault(); // a comment belongs to a post
	}
    // RELATIONSHIPS - END
}
