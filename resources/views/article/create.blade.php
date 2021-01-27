@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Création d'un nouvel article</h1>
        <form method="post" action="{{route('articles.store')}}">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control" placeholder="Titre de votre aricle"/>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Sous-Titre</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Titre de votre aricle"/>
                    <small class="form-text text-muted">Décrivez le contenu de votre article , le thème traité</small>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea name="content" class="form-control w-100"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection
