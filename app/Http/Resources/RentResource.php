<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id' => $this->Id,
            'Customer_name' => $this->customer->Name,
            'Book_title' => $this->book->Title,
            'Date_Rent' => $this->Date_Rent,
            'Date_Return' => $this->Date_Return,
        ];
    }
}
