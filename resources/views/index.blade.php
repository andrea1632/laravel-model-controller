<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <header>
        <h1 class="text-center text-success py-4">
            Films
        </h1>
    </header>
    <body class="bg-dark">
        <div class="container">
            <div class="row p-4 justify-content-center">
                @foreach ($movies as $key => $movie)
                    <div class="card col-3 m-2">
                        <img class="w-50 align-self-center" src="https://previews.123rf.com/images/alexeysmirnov/alexeysmirnov1910/alexeysmirnov191000048/136434981-aprire-il-ciak-nero-film-isolato-su-sfondo-bianco-cinema-cinema-attrezzature-per-l-industria-cinemat.jpg?fj=1" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                        <h6 class="card-title mb-5">Titolo originale: {{$movie->original_title}}</h6>
                        <div class="card-text">
                            <p>Nazionalità: {{$movie->nationality}}</p>
                            <p>Data Uscita: {{$movie->date}}</p>
                            <p>Voto: {{$movie->vote}}</p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
 
        </div>
    </body>
</html>
