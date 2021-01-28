@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Articles</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info my-3" href="{{ route('articles.create') }}"><i class="fas fa-plus mx-2"></i>Ajouter un nouvel article</a>
        </div>
        <table class="table table-hover">
            <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Crée le </th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->dateFormatted()  }}</td>
                    <td class="d-flex">
                        <a href="#" class="btn btn-warning mx-3">Editer</a>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
                        <form action="{{ route('articles.delete',$article->id) }}" method="POST">
                            <!-- on va venir surchager la methode delete -->
                            @csrf
                            @method('DELETE')
                            <div class="modal" id="modal-open-{{ $article->id }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">La suppression d'un élément est définitive</h5>
                                            <button type="button" class="close" data-dismiss="modal"  onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Êtes-vous sûr de supprimer cet article :o ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Oui</button>
                                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" data-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{ $articles->links('vendor.pagination.custom') }}
        </div>
    </div>
@endsection
