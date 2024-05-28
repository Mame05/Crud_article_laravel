<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD D'ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Détails de l'article N°{{$article->id}}</h1>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 20rem;height:500px">
            <img src="https://www.thesaurus.com/e/wp-content/uploads/2021/11/20211104_articles_1000x700.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><strong>Nom: {{ $article->nom }}</h5>
              <p> <strong>Description : {{ $article->description}}</strong> </p>
              <p><strong> Date de la création : {{$article->date_creation}}</strong></p>
              <a href="/modifier-article/{{ $article->id }}" class="btn btn-info">Modifier</a>
              <a href="/supprimer-article/{{ $article->id }}" class="btn btn-danger">Supprimer</a>
              <a href="/article" class="btn btn-primary">Revenir à la liste des articles</a>
            </div>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>