<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');   // alleen toegeankelijk als je niet bent ingelogd.
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');    // hier word je naar de home page gestuurd. (deze pagina gebruiken wij niet maar we worden er soms toch naar toe gestuurd. hoe kan dat????)
    }
}
