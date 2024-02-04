@extends('tuteur.dashboard.default')

@section('title')
    Évaluation
@endsection

@section('content')
    <h1 class="text-center">J'évalue, mes étudiants</h1>
    <form action="/tuteur/dashboard/evaluation/etudiant" method="post">

        @if(session()->has('successAdd'))
        <div class="alert alert-success mb-4">
            <h4>{{ session()->get('successAdd') }}</h4>
        </div>
        @endif
    
        @if(session()->has('successDelete'))
        <div class="alert alert-success mb-4">
            <h4>{{ session()->get('successDelete') }}</h4>
        </div>
        @endif
    
        @csrf
        <label for="nom">Nom et prénoms de l'évaluateur :</label>
        <input type="text" name="evaluateur" required>
    
        <br>
    
        <label for="prenom">Nom et prénoms de l'évalué :</label>
        <input type="text" name="evalue" required>
    
        <br>
    
        <label for="note">Note :</label>
        <input type="number" name="note" required>
    
        <br>
    
        <button type="submit">Soumettre</button>
    </form>
@endsection