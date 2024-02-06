@extends('etudiant.dashboard.default')

@section('title')
    Évalue les membres du groupe
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">Évaluation</h3>
                <div class="form-group mt-3">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" class="form-control" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="note">Note :</label>
                    <input type="number" class="form-control" name="note" required>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                </form>
            </article>
        </section>
        <main>
        @endsection
