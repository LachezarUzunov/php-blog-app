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
        return view('single-post');
    }
}