@extends('internship.dashboard.default')

@section('title')
    Gestion des tuteurs
@endsection

@section('content')
    <h1 class="text-center">Attribue des étudiants</h1>
    <form action="/internship/dashboard/attribue" method="post">

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
        <label for="tutorname">Saisissez le nom et prénoms du tuteur</label>
        <input type="text" name="tutorname" required>
    
        <br>
    
        <label for="studentname">Attribuez un étudiant au tuteur</label>
        <input type="text" name="studentname" required>
    
        <br>
    
        <button type="submit">Soumettre</button>
    </form>
@endsection