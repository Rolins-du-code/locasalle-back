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


            $table->string('adresse')->nullable();  // permetanmt d/identifier le quartier ou la zonne avec presision


            $table->decimal('prix_par_jour', 10, 2)->unsigned(); //prix de location par jour, max 999999.99

            $table->string('statut')->default('disponible'); // disponible louez en_maintenance suspendu

            $table->text('description')->nullable(); //description de la salle, peut être null

                            //-------RELATION-------

            // Lpe proprietaire de la salle

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            //   localisation de ville

            $table->foreignId('ville_id')->constrained('villes')->onDelete('restrict');

            //   Le type d'evenemrnt la gategorie 

            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict');

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
