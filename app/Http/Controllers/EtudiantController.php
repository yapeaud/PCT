<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiant.index');
    }

    public function inscription()
    {
        return view('etudiant.inscription');
    }
    
    public function traitementInscriptionEtudiant(Request $request)
    {
      // Validation des données
      $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mdp' => 'required'
      ]);

    $etudiant = New Etudiant;
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->contact = $request->input('contact');
    $etudiant->email = $request->input('email');
    $etudiant->mot_de_passe	= Hash::make($request->input('mdp'));
    $etudiant->save();
    return back()->with("successAdd", "L'etudiant a été ajouté avec succès !");
    }

    public function listeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function etudiantDasboard()
    {
      return view('etudiant.dashboard');
    }

    public function etudiantEvaluationMembre()
    {
      return view('etudiant.membre');
    }

    public function etudiantEvaluationTuteur()
    {
      return view('etudiant.tuteur');
    }

    public function etudiantRapport()
    {
      return view('etudiant.rapport');
    }

    public function etudiantLivrable()
    {
      return view('etudiant.livrable');
    }
}
