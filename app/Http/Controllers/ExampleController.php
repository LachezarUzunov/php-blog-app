<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $myName = 'Lacho';
        $animals = ['cat', 'dog', 'lion'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $myName]);
    }


    public function aboutPage() {
        return '<h1>About page</h1><a href="/">Go to home page</a>';
    }
}
