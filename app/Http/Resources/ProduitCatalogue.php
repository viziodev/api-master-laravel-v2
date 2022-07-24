<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitCatalogue extends JsonResource
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
            "id"=>$this->id,
            "libelle"=>$this->libelle,
            "prixOld"=>$this->prixOld,
            "prix"=>$this->prix,
            "photo"=>$this->photo,
            "isPromo"=>$this->isPromo,
            "note"=>$this->numberToArray($this->note),
            'categorie_id'=>$this->categorie_id
        ];
    }

    private function numberToArray(int $number ){
        $arr=[];
       for ($i=0; $i <$number ; $i++) { 
               $arr[]=$i;
       }
       return  $arr;
    }
}
