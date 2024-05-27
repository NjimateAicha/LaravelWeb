<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Peut-être VARCHAR selon vos besoins
            $table->string('type'); // Peut-être ENUM ou VARCHAR selon vos besoins
            $table->unsignedBigInteger('size'); // Utilisez un entier non signé pour la taille
            // $table->binary('bin_img'); // Utilisez BLOB pour stocker de grandes quantités de données binaires
            $table->timestamps();
    
            // Ajout de contraintes logiques
            $table->unique(['nom', 'type']); // Assure l'unicité du couple (nom, type)
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
