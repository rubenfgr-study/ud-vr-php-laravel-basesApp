<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function index($page = 0)
    {
        $title = 'Listado de mis películas';
        return view('film/index', ['title' => $title, 'page' => $page]);
    }

    public function detail()
    {
        /* echo "<h1>Film details</h1>";
        die(); */
        return view('film.detail');
    }

    public function redirect()
    {
        return redirect()->action([FilmController::class, 'index']);
    }

    public function form()
    {
        return view('film.form');
    }

    public function receive(Request $request)
    {
        $name = $request->input('nombre');
        $email = $request->input('email');
        var_dump($name, $email);
        die();
    }
}
