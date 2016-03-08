<?php

namespace App\Http\Controllers;
use App\Movies;


/**
 * Class MoviesController
 * @package App\Http\Controllers
 *
 */
class MoviesController extends Controller{



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lister(){

        /* all()  Récupérer tous mes films */
        $movies = Movies::all();

        //dump($movies);

        // Je transporte mes films pour ma vue
        return view("movies/list",[
            "movies" => $movies
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function voir($id){

        // find() permet de retrouver
        // 1 objet par son id
        $movie = Movies::find($id);

        return view("movies/voir", [
            "movie" => $movie
        ]);
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function creer(){

        return view("movies/creer");
    }

    /**
     * Argument d'action de Controller
     * sont égaux aux arguments de l'URI
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editer($id){

        // var_dump($variable) <=> dump()

        // Deboger mon id
        //dump() fct de debogage des variables
        //dump($id);

        // Le transporteur transporte mes données
        // a la vue

        return view("movies/editer",
        [
            'id' => $id
        ]);
    }











}





















