<?php

namespace App\Http\Responses;

use Illuminate\Http\Resources\Json\JsonResource;

class HelloWorldResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'hello' => $this['hello'],
        ];
    }
}