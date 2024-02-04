<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\EvaluerMembre;
use App\Models\EvaluerTuteur;
use App\Models\EtudiantRapport;
use App\Models\EtudiantLivrable;
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

    $etudiant = new Etudiant;
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->contact = $request->input('contact');
    $etudiant->email = $request->input('email');
    $etudiant->mot_de_passe  = Hash::make($request->input('mdp'));
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
    $evaluer_membres = EvaluerMembre::all();
    return view('etudiant.membre', compact('evaluer_membres'));
  }

  public function traitementEtudiantEvaluationMembre(Request $request)
  {
    $request->validate([
      'nom' => 'required|string|max:255',
      'prenom' => 'required|string|max:255',
      'note' => 'required|string|max:20',
    ]);

    $evaluer_membre = new EvaluerMembre;
    $evaluer_membre->nom = $request->input('nom');
    $evaluer_membre->prenom = $request->input('prenom');
    $evaluer_membre->note = $request->input('note');
    $evaluer_membre->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
  }

  public function etudiantEvaluationTuteur()
  {
    $evaluer_tuteurs = EvaluerTuteur::all();
    return view('etudiant.tuteur', compact('evaluer_tuteurs'));
  }

  public function traitementEtudiantEvaluationTuteur(Request $request)
  {
    $request->validate([]);

    $evaluer_tuteur = new EvaluerTuteur;
    $evaluer_tuteur->nom = $request->input('nom');
    $evaluer_tuteur->prenom = $request->input('prenom');
    $evaluer_tuteur->note = $request->input('note');
    $evaluer_tuteur->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
  }

  public function etudiantRapport()
  {
    $etudiant_rapports = EtudiantRapport::all();
    return view('etudiant.rapport', compact('etudiant_rapports'));
  }

  public function traitementEtudiantRapport(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'file' => 'required|mimes:docx,xlsx,pptx,pdf|max:10000000'
    ]);

    $title = $request->input('title');
    $file = $request->file('file');
    
    $fileName = $title . '_' . time() . '.' . $file->getClientOriginalExtension();
   
    $path = $file->storeAs('uploads', $fileName);

    $etudiant_rapport = new EtudiantRapport;
    $etudiant_rapport->nom_du_rapport = $request->input('title');
    $etudiant_rapport->file = $request->input('file');

    return back()->with("successAdd", 'Votre rapport a été déposé avec succès.');
  }

  public function etudiantLivrable()
  {
    $etudiant_rapports = EtudiantLivrable::all();
    return view('etudiant.livrable',);
  }
  public function traitementEtudiantLivrable(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'file' => 'required|mimes:docx,xlsx,pptx,pdf,sql|max:10000000'
    ]);

    $title = $request->input('title');
    $file = $request->file('file');
    
    $fileName = $title . '_' . time() . '.' . $file->getClientOriginalExtension();
   
    $path = $file->storeAs('uploads', $fileName);

    $etudiant_livrable = new EtudiantRapport;
    $etudiant_livrable->nom_du_rapport = $request->input('title');
    $etudiant_livrable->file = $request->input('file');

    return back()->with("successAdd", 'le livrable a été déposé avec succès.');
  }
}
