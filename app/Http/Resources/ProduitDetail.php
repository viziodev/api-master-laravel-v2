<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitDetail extends JsonResource
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
            "libelle"=>$this->libelle,
            "reference"=>$this->reference,
            "description"=>$this->description,
            "prixOld"=>$this->prixOld,
            "prix"=>$this->prix,
            "photo"=>$this->photo,
            "isPromo"=>$this->isPromo,
            'categorie_id'=>$this->categorie_id
        ];
    }
}
