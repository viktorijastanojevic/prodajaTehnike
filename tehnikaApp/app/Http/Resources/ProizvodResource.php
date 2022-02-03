<?php

namespace App\Http\Resources;

use App\Models\Kategorija;
use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'nazivProizvoda' => $this->resource->nazivProizvoda,
            'opis' => $this->resource->opis,
            'cena' => $this->resource->cena,
            'kategorija' => new KategorijaResource(Kategorija::find($this->resource->kategorija_id)),
            'godinaProizvodnje' => $this->resource->godinaProizvodnje
        ];
    }
}
