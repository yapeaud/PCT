@extends('etudiant.dashboard.default')

@section('title')
Évalue les membres du groupe
@endsection

@section('content')
<h1 class="text-center">Note</h1>
<form action="/etudiant/dashboard/evaluation/membre" method="post">

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
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required>

    <br>

    <label for="note">Note :</label>
    <input type="number" name="note" required>

    <br>

    <button type="submit">Soumettre</button>
</form>

@endsection

