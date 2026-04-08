<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            //  -- RELATION
            // LE Locataire celui qui reservd la salle

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // la  salle concerne par la reservation 

            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade');

            // Information de reservatiom 

            $table->date('date_debut');

            $table->date('date_fin')->nullable(); // nullable au cas ou la location dure pluser jour

            $table->decimal('prix_total', 12,2); // l;e prix enregistree au moment de la reservation

            // gestion de status de la reservation

            $table->string('statut')->default('en_attente');

            $table->text('note_client')->nullable(); // concerne la demande du client ( besoin de 200 chaises tec...)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
