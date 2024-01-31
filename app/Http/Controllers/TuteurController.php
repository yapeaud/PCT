<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TuteurController extends Controller
{
    public function index()
    {
        return view('tuteur.index');
    }

    public function inscription()
    {
        return view('tuteur.inscription');
    }

    public function traitementInscriptionTuteur(Request $request)
    {
      // Validation des données
      $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mdp' => 'required'
      ]);

    $tuteur = New Tuteur;
    $tuteur->nom = $request->input('nom');
    $tuteur->prenom = $request->input('prenom');
    $tuteur->contact = $request->input('contact');
    $tuteur->email = $request->input('email');
    $tuteur->mot_de_passe	= Hash::make($request->input('mdp'));
    $tuteur->save();
    return back()->with("successAdd", "Le tuteur a été ajouté avec succès !");
    }

    public function listeTuteur()
    {
        $tuteurs = Tuteur::all();
        return view('tuteur.liste', compact('tuteurs'));
    }

    public function tuteurDasboard()
    {
      return view('tuteur.dashboard');
    }

    public function tuteurEvaluationEtudiant()
    {
      return view('tuteur.etudiant');
    }

    public function tuteurCreeGroupe()
    {
      return view('tuteur.groupe');
    }

    public function tuteurRapport()
    {
      return view('tuteur.rapport');
    }

    public function tuteurAttribueRole()
    {
      return view('tuteur.role');
    }

}
