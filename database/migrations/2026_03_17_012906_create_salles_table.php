<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100); //max de caractères pour le nom de la salle 100
            $table->string('emplacement', 200); //emplacement de la salle, peut être 200 caractères
            $table->integer('capacite')->unsigned(); //capacité de la salle
            $table->decimal('prix_par_jour', 10, 2)->unsigned(); //prix de location par jour, max 999999.99
            $table->text('description')->nullable(); //description de la salle, peut être null
            $table->jsonb('photos')->nullable(); //URL de la photo de la salle, peut être null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salles');
    }
};
