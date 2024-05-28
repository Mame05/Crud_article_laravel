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
                <h1>LISTE D'ARTICLES</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un article</a>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}} 
                </div>
                @endif
                @php
                    $ide = 1;
                @endphp
                <div class="row">
                @foreach($articles as $article)
                <div class="col-sm-3">
                    <div class="card" style="width: 20rem;height:400px">
                    <img src="https://www.thesaurus.com/e/wp-content/uploads/2021/11/20211104_articles_1000x700.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Nom:{{ $article->nom }}</h5>
                      <a href="/detail-article/{{ $article->id }}" class="btn btn-primary">Voir détails</a>
                      <a href="/modifier-article/{{ $article->id }}" class="btn btn-info">Modifier</a>
                    <a href="/supprimer-article/{{ $article->id }}" class="btn btn-danger">Supprimer</a>
                    </div>
                    </div>
                </div>
                  @php
                  $ide += 1;
                  @endphp
                  @endforeach
                </div>
    </div>
</div>
</div>
                
                       
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




