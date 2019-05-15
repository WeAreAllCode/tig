<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // RELATIONSHIPS - START
    public function user() {
		return $this->belongsTo(User::class)->withDefault(); // a post belongs to a user
    }
    public function comments() {
		return $this->hasMany(Comment::class)->orderBy('created_at'); // a post has many comments
    }
    public function category() {
		return $this->belongsTo(Category::class)->withDefault(); // a post belongs to a category
    }
    // RELATIONSHIPS - END

    // SCOPES - START
    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
    public function scopePublished($query) {
        return $query->where('is_published', 1);
    }
    public function scopeDraft($query) {
        return $query->where('is_published', 0);
    }
    // SCOPES - END
}
