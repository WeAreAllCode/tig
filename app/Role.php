<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // RELATIONSHIPS - START
    public function users() {
		return $this->hasMany(User::class); // a role has many users
	}
    // RELATIONSHIPS - END

    // SCOPES - START
    public function scopeActive($query) {
    	return $query->where('is_active', 1);
    }
    // SCOPES - END
}
