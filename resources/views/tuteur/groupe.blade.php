@extends('tuteur.dashboard.default')

@section('title')
Créer un groupe
@endsection

@section('content')
<h1 class="text-center">Le tuteur crée un groupe</h1>
<form action="/tuteur/dashboard/groupe" method="post">

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
    <label for="groupname">Saisis le nom du groupe :</label>
    <input type="text" name="groupname" required>

    <br>

    <label for="specialty">Saisis la spécialité :</label>
    <input type="text" name="specialty" required>

    <br>

    <label for="studentnumbers">Saisis le nombre d'étudiants :</label>
    <input type="number" name="studentnumbers" required>

    <br>

    <label for="tutorsname">Saisis le nom du tuteur :</label>
    <input type="text" name="tutorsname" required>

    <br>
    <button type="submit">Soumettre</button>
</form>

@endsection
