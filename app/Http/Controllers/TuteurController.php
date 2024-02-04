<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use Illuminate\Http\Request;
use App\Models\TuteurCreeGroupe;
use App\Models\TuteurAttribueRole;
use App\Models\TuteurEvalueEtudiant;
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

    $tuteur = new Tuteur;
    $tuteur->nom = $request->input('nom');
    $tuteur->prenom = $request->input('prenom');
    $tuteur->contact = $request->input('contact');
    $tuteur->email = $request->input('email');
    $tuteur->mot_de_passe  = Hash::make($request->input('mdp'));
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

  public function tuteurEvalueEtudiant()
  {
    $tuteur_evalue_etudiants = TuteurEvalueEtudiant::all();
    return view('tuteur.etudiant', compact('tuteur_evalue_etudiants'));
  }

  public function traitementTuteurEvalueEtudiant(Request $resquest)
  {
    $resquest->validate([
      'evaluateur' => 'required|string|max:255',
      'evalue' => 'required|string|max:255',
      'note' => 'required|string|max:20',
    ]);

    $tuteur_evalue_etudiant = new TuteurEvalueEtudiant;
    $tuteur_evalue_etudiant->evaluateur = $resquest->input('evaluateur');
    $tuteur_evalue_etudiant->evalue = $resquest->input('evalue');
    $tuteur_evalue_etudiant->note = $resquest->input('note');
    $tuteur_evalue_etudiant->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
  }

  public function tuteurCreeGroupe()
  {
    $tuteur_cree_groupes = TuteurCreeGroupe::all();
    return view('tuteur.groupe', compact('tuteur_cree_groupes'));
  }

  public function traitementTuteurCreeGroupe(Request $request)
  {
    // Validation des données
    $request->validate([
      'groupname' => 'required|string|max:255',
      'specialty' => 'required|string|max:255',
      'studentnumbers' => 'required|integer|max:20',
      'tutorsname' => 'required|string|max:255'
    ]);
    
    $tuteur_cree_groupe = new TuteurCreeGroupe;
    $tuteur_cree_groupe->nom_du_groupe = $request->input('groupname');
    $tuteur_cree_groupe->specialite = $request->input('specialty');
    $tuteur_cree_groupe->nombre_d_etudiants = $request->input('studentnumbers');
    $tuteur_cree_groupe->nom_du_tuteur = $request->input('tutorsname');
    $tuteur_cree_groupe->save();
     return back()->with("successAdd", 'Le groupe a été créé avec succès.');
  }

  public function tuteurAttribueRole()
  {
    $tuteur_attribue_roles = TuteurAttribueRole::all();
    return view('tuteur.role', compact('tuteur_attribue_roles'));
  }

  public function traitementTuteurAttribueRole(Request $request)
  {
    // Validation des données
    $request->validate([
      'groupname' => 'required|string|max:255',
      'studentname' => 'required|string|max:255',
      'assignedrole' => 'required|string|max:255',
    ]);

    $tuteur_attribue_role = new TuteurAttribueRole;
    $tuteur_attribue_role->nom_du_groupe = $request->input('groupname');
    $tuteur_attribue_role->etudiant = $request->input('studentname');
    $tuteur_attribue_role->role_attribue = $request->input('assignedrole');
    $tuteur_attribue_role->save();
    return back()->with("successAdd", 'Rôle enregistré avec succès.');
  }

  public function tuteurRapport()
  {
    return view('tuteur.rapport');
  }
  public function traitementTuteurRapport()
  {
    
  }
}
