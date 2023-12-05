<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $array = parent::toArray($request);
        $getmedia = $this->getFirstMedia("thumbnails");
        $array['thumbnail'] = (($getmedia) ? $getmedia->getUrl() : asset('images/default_logo.png')) ;
        $array['thumbstatus'] = (($getmedia) ? true : false);
        $collection=[];
        foreach ($this->getMedia("cars_display") as $key => $value) {
            array_push($collection,['id'=> $value->id,'path'=> $value->getUrl()]);
        }
        $array['collection']=$collection;
        return $array;

    }
}
