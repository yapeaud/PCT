@extends('tuteur.dashboard.default')

@section('title')
    Attribution de rôle
@endsection

@section('content')
    <h1 class="text-center">J'attribue des rôles aux étudiants</h1>
    <form action="/tuteur/dashboard/groupe/role" method="post">

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
        <label for="nom">Entrez le nom du groupe :</label>
        <input type="text" name="groupname" required>
    
        <br>
    
        <label for="prenom">Entrez le nom et prénoms de l'étudiant :</label>
        <input type="text" name="studentname" required>
    
        <br>
    
        <label for="note">Attribuez un rôle :</label>
        <input type="text" name="assignedrole" required>
    
        <br>
        
        <button type="submit">Soumettre</button>
    </form>
@endsection