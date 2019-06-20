<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Url extends JsonResource
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
            'url' => $this->url,
            'code' => $this->code,
            'title' => $this->title,
            'visited_count' => $this->visited_count,
            'shorten_url' => env('APP_URL') . '/' .  $this->code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
