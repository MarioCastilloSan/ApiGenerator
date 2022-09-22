<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RoutinesResource extends Resource
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
            "ROUTINE_NAME" => $this->ROUTINE_NAME,
            "ROUTINE_TYPE" => $this->ROUTINE_TYPE,
            "ROUTINE_DEFINITION" => $this->ROUTINE_DEFINITION,
            "ROUTINE_BODY" => $this->ROUTINE_BODY
        ];
    }
}
