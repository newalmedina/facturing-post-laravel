<?php

namespace App\Modules\Products\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

/*
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ];
*/
        return parent::toArray($request);
    }
}