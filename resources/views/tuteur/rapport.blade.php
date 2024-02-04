@extends('tuteur.dashboard.default')

@section('title')
   Rapport du tuteur
@endsection

@section('content')
    <h1 class="text-center">Le rapport du tuteur</h1>
    <form action="/etudiant/dashboard/rapport" method="post" enctype="multipart/form-data">
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
        <label for="title">Le nom du rapport</label>
        <input type="text" name="title" id="title" required>

        <label for="file">Sélectionnez un fichier :</label>
        <input type="file" name="file" accept=".docx, .xlsx, .pptx, .pdf">
        <button type="submit">Déposer</button>
    </form>
@endsection