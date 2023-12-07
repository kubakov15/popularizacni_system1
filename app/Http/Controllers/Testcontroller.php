<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class Testcontroller extends Controller
{
    function Booklist()
    {



    $books = Books::all();
    return view('welcome', ['books'=> $books]);

    }



    function Booklst()
    {

    return view('pokus');

    }
}
