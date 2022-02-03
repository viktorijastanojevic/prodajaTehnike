<?php

namespace App\Http\Resources;

use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PorudzbinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [

            'id' => $this->resource->id,
            'datumPorudzbine' => $this->resource->datumPorudzbine,
            'adresaDostave' => $this->resource->adresaDostave,
            'proizvod' => new ProizvodResource(Proizvod::find($this->resource->proizvod_id)),
            'korisnik' => new UserResource(User::find($this->resource->user_id))

        ];
    }
}
