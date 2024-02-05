@extends('etudiant.dashboard.default')

@section('title')
    Livrable
@endsection

@section('content')
    <h1 class="text-center">Dépôt du livrable</h1>
    <form class="form-signin" action="/etudiant/dashboard/livrable" method="post" enctype="multipart/form-data">
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
        <div class="form-group">
        <label for="title">Le nom du livrable</label>
        <input type="text" name="title" id="title" required>
        </div>

        <div class="form-group">
        <label for="file">Sélectionnez un fichier :</label>
        <input type="file" name="file" accept=".docx, .xlsx, .pptx, .pdf, .sql">
    </div>
        <button type="submit">Soumettre</button>
    </form>
@endsection