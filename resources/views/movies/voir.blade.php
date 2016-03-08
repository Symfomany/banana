<html>
    <body>
        <h3>Voir le film {{ $movie->title }} </h3>
        <p>
            <a href="{{ route('movies_lister') }}">
                Retour vers ma liste de film
            </a>
        </p>
        <p>{{ $movie->duree }}h. </p>
        <p>{{ $movie->budget }}€ </p>
        <p><i>{!! $movie->synopsis !!}</i> </p>
        <p>{!!  $movie->description !!}  </p>
    </body>
</html>