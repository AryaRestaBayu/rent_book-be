<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id' => $this->Id,
            'Name' => $this->Name,
            'Identity_card_number' => $this->Identity_card_number,
            'Address' => $this->Address,
        ];
    }
}
