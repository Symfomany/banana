<html>
    <body>
        <h1>Liste de nos films</h1>
        <hr />

        @foreach($movies as $movie)

            <h3>
                <a href="{{ route("movies_voir",
                [
                    "id" => $movie->id
                ]) }}">
                {{ $movie->title }}
                </a>
            </h3>
            <img style="width: 100px; height: 200px" src="{{ $movie->image }}" />
            {{-- HTML rendu --}}
            <p>{!!  $movie->synopsis !!} </p>

        @endforeach
    </body>
</html>