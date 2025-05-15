<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Afficher la page de session
     */
    public function index(Request $request)
    {
        return view('session', [
            'sessionData' => $request->session()->all(),
            'sessionId' => $request->session()->getId()
        ]);
    }

    /**
     * Enregistrer des données en session
     */
    public function store(Request $request)
    {
        // Valider la requête
        $request->validate([
            'key' => 'required|string|max:255',
            'value' => 'required|string|max:255'
        ]);

        // Stocker en session
        $request->session()->put($request->key, $request->value);

        return redirect()->back()->with('success', 'Données enregistrées en session');
    }

    /**
     * Supprimer des données de session
     */
    public function destroy(Request $request, $key)
    {
        $request->session()->forget($key);

        return redirect()->back()->with('success', 'Données supprimées de la session');
    }
}