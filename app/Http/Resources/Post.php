<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
			'title' => $this->title,
			'slug' => $this->slug,
			'sub_title' => $this->sub_title,
			'body' => $this->body,
			'is_published' => $this->is_published,
			'user_id' => $this->user_id,
			'category_id' => $this->category_id,
        ];
    }
}
