<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function listAll()
    {
        $commande = Commande::all();
        return response()->json($commande);
    }

    public function create(Request $request)
    {
        $commande = new Commande;
        $commande->commande_client= $request->commande_client;
        $commande->commande_date= $request->commande_date;
        $commande->commande_information= $request->commande_information;
        
        

        $commande->save();

        return response()->json($commande);
    }

    public function listCommande($id)
    {
        $commande = Commande::find($id);

        return response()->json($commande);
    }

    public function update(Request $request, $id)
    {
        
        $commande= commande::find($id);
        
        $commande->client = $request->input('commande_client');
        $commande->date = $request->input('commande_date');
        $commande->information = $request->input('commande_information');
        $commande->save();
        return response()->json($commande);
    }

    public function delete($id)
    {
        $commande = Commande::find($id);
        $commande->delete();

        return response()->json('Command deleted successfully');
    }
}
