<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelle"=>$this->faker->sentence(2),
            "reference"=>$this->faker->unique()->sentence(2),
            "description"=>$this->faker->text(250),
            "qteStock"=>$this->faker->numberBetween($min = 150, $max = 600),
            "prixOld"=>$this->faker->numberBetween($min = 150, $max = 600),
            "note"=>$this->faker->numberBetween($min = 1, $max = 5),
            "prix"=>$this->faker->numberBetween($min = 150, $max = 600),
            "isPromo"=>$this->faker->boolean(),
            'categorie_id'=>$this->faker->randomElement(Categorie::pluck('id'))
        ];
 
    }
}
