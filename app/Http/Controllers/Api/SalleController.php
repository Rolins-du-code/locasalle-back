<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    /// lister tout les salles disponibles pour le frontend
    public function index()
    {

             // recupere tout les salles de la base de données
        $salles = Salle::with(['ville', 'category', 'prestataire'])->where('statut', 'actif')->get();

        return response()->json([
            'success' => true,   // renvois les donner sous forme json pour le frontend
            'data' => $salles
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salle = Salle::with(['ville', 'category', 'prestataire'])->find($id);

        if(!$salle) {
            return response()->jsonp(['success' => false, 'message' => 'salle non trouvee'], 404);
        }
        return  response()->json(['success'=>true , 'data' => $salle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
