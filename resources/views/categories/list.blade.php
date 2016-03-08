<html>
    <body>
        <h3>Lister de nos categories</h3>


        @foreach($categories as $category)
            <h3>{{  $category->title }}</h3>
            <p>{{  $category->description }}</p>
        @endforeach
    </body>
</html>