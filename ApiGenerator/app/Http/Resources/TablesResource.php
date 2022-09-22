<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TablesResource extends Resource
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
            'TABLE_NAME' => $this->TABLE_NAME,
            'TABLE_TYPE' => $this->TABLE_TYPE
        ];
    }
}
