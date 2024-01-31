<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InternshipController extends Controller
{
       public function index()
    {
        return view('internship.index');
    }

    public function inscription()
    {
        return view('internship.inscription');
    }
    
    public function traitementInscriptionInternship(Request $request)
    {
      // Validation des données
      $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mdp' => 'required'
      ]);

    $internship = New Internship;
    $internship->nom = $request->input('nom');
    $internship->prenom = $request->input('prenom');
    $internship->contact = $request->input('contact');
    $internship->email = $request->input('email');
    $internship->mot_de_passe	= Hash::make($request->input('mdp'));
    $internship->save();
    return back()->with("successAdd", "Inscription reçue !");
    }

    public function listeInternship()
    {
        $internships = Internship::all();
        return view('internship.liste', compact('internships'));
    }

    public function internshipDashboard()
    {
      return view('internship.dasboard');
    }

    public function internshipGereTuteur(){
      return view('internship.gere');
    }

    public function internshipNoteTuteur()
    {
      return view('internship.note');
    }

    public function internshipAttribueEtudiant()
    {
      return view('internship.attribue');
    }
}
