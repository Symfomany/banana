<?php


Route::get('/', function () {
    return view('statique/welcome');
});

/*
 * Page Contact
 * /contact => URI (bout de l'ul
 */
Route::get('/contact', function () {

    // Retourne la vue contact
    return view('statique/contact');
});

/*
 * Page de Concept
 *
 */
Route::get('/concept', function () {

    // Retourne la vue contact
    return view('statique/concept');
});


/*
 * Page de Concept
 *
 */
Route::get('/a-propos', function () {

    // Retourne la vue contact
    return view('statique/apropos');
});


/* Groupe de route */
Route::group(['prefix' => 'movies'], function () {


    Route::get('/lister', [
        'as' => 'movies_lister',
        'uses' => 'MoviesController@lister'
    ]);

    Route::get('/creer', [

        'uses' => 'MoviesController@creer'
    ]);

    /**
     * Argument qui sappelle id en URL
     * Argument {id}
     */
    Route::get('/editer/{id}', [

        'uses' => 'MoviesController@editer'
    ])
    ->where('id', '[0-9]+');
    // where permet de une restriction
    // au niveau de mon argument en URL


    Route::get('/voir/{id}', [
        'as' => 'movies_voir', //nom à ma route
        'uses' => 'MoviesController@voir'
    ])
    ->where('id', '[0-9]+');

});


/* Groupe de route */
Route::group(['prefix' => 'categories'], function () {

    Route::get('/lister', [

        'uses' => 'CategoriesController@lister'
    ]);

    Route::get('/creer', [

        'uses' => 'CategoriesController@creer'
    ]);

    Route::get('/editer/{id}', [

        'uses' => 'CategoriesController@editer'
    ])->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'uses' => 'CategoriesController@voir'
    ])->where('id', '[0-9]+');

});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
