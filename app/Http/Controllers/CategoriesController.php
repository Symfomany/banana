<?php

namespace App\Http\Controllers;
use App\Categories;


/**
 * Class MoviesController
 * @package App\Http\Controllers
 * Chaque controller doit etr suffixer
 * par le mot clefs Controller et doit
 * hériter de ma classe Controller
 *
 */
class CategoriesController extends Controller{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lister(){

        $categories = Categories::all();

        return view("categories/list", [
            "categories" => $categories
        ]);
    }

    public function voir($id){

        return view("categories/voir");
    }

    public function creer(){

        return view("categories/creer");
    }

    public function editer($id){

        return view("categories/editer");
    }











}





















