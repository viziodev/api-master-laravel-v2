<?php

use App\Models\Categorie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string("libelle");
            $table->string("reference")->unique();
            $table->string("description")->nullable();
            $table->string("photo")->nullable();
            $table->double("prix");
            $table->double("prixOld");
            $table->double("qteStock");
            $table->integer('note');
            $table->boolean("isPromo")->default(false);
            $table->foreignIdFor(Categorie::class,"categorie_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
