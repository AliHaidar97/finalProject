<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests;
use App\User;
use App\Post;
use App\Http\Resources\Api as ApiResources;
use App\Http\Resources\Api2 as Api2Resources;
class Api2 extends JsonResource
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
            'Name' => $this->Name,
            'description' => $this->description,
            'products' => ApiResources::collection($this->product),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            ];
    }
}
