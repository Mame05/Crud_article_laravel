<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD EN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>CRUD D'ARTICLES</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un article</a>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}} 
                </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Date de la création</th>
                            <th>À la une ou pas</th>
                            <th>L'url de l'image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->nom }}</td>
                            <td>{{ $article->description}}</td>
                            <td>{{ $article->date_creation}}</td>
                            <td>{{ $article->est_a_la_une }}</td>
                            <td>{{ $article->image }}</td>
                            
                            <td>
                                <a href="/modifier" class="btn btn-info">Modifier</a>
                                <a href="/supprimer" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>