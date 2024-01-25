<?php

namespace App\Http\Resources\Editor\Design;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'title'       => $this->title,
            'designer_id' => $this->designer_id,
            'category_id' => $this->category_id,
            'image'       => $this->image,
            'backGround'  => $this->backGround,
            'content'     => $this->content,
            'price'       => $this->price,
            'created_at'  => $this->created_at,
            'elements'    => DesignElementResource::collection($this->elements),

        ];
    }
}
