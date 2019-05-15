<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // RELATIONSHIPS - START
    public function posts() {
		return $this->hasMany(Post::class)->orderBy('created_at'); // a category has many posts
    }
    // RELATIONSHIPS - END

    // SCOPES - START
    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
    // SCOPES - END
}
