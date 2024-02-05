@extends('internship.dashboard.default')

@section('title')
   Notation du tuteur
@endsection

@section('content')
    <h1 class="text-center">La note du tuteur</h1>
    <form action="/internship/dashboard/note" method="post">

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
        <label for="nom">Saisissez le nom et prénoms du tuteur</label>
        <input type="text" name="nom" required>
    
        <br>
    
        <label for="note">Saisissez la note du tuteur</label>
        <input type="number" name="note" required>
    
        <br>
    
        <button type="submit">Soumettre</button>
    </form>
@endsection