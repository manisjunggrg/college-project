<?php


namespace Neputer\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResources extends JsonResource
 {

     public function toArray($request)
     {
        return [
          'id'=>$this->id,
          'name'=>$this->name,
          'address'=>$this->address,
          'phone'=>$this->phone,
          'created_at'=>$this->created_at->diffForHumans().' '.$this->created_at->format('Y-m-d'),
        ];
     }

}
