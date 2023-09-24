<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BukuResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id' => $this->Id,
            'Title' => $this->Title,
            'Author' => $this->Author,
            'Price_rent' => $this->Price_rent,
            'Book_category' => $this->Book_category,
        ];
    }
}
