<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'short_description' => $this->short_description,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'start_year' => $this->start_year,
            'end_year' => $this->end_year,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'links' => ProjectLinkResource::collection($this->whenLoaded('links')),
            'images' => ProjectImageResource::collection($this->whenLoaded('images')),
            'technologies' => TechnologyResource::collection($this->whenLoaded('technologies'))
        ];
    }
}
