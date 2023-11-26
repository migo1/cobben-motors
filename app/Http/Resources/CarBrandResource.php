<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarBrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $array = parent::toArray($request);
        $getmedia = $this->getFirstMedia("logos");
        $array['logo'] = (($getmedia) ? $getmedia->getUrl() : asset('images/default_logo.png'));
        $array['imgstatus'] = (($getmedia) ? true : false);
        return $array;
    }
}
