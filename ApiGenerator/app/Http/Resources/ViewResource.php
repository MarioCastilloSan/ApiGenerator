<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ViewResource extends Resource
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
            "TABLE_NAME" => $this->TABLE_NAME,
            "VIEW_DEFINITION" => $this->VIEW_DEFINITION,
            "CHECK_OPTION" => $this->CHECK_OPTION,
            "IS_UPDATABLE" => $this->IS_UPDATABLE,
        ];
    }
}
