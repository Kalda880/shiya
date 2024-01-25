<?php

namespace App\Http\Resources\Editor\Design;

use Illuminate\Http\Resources\Json\JsonResource;
use function GuzzleHttp\json_decode;

class DesignElementResource extends JsonResource
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
            'id'           => $this->id,

            'element_data' => json_decode($this->element_data),
        ];
    }
}
