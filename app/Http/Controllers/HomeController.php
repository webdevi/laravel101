<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class HomeController extends Controller
{
    public function index()
    {
        $books = [
            'Harry potter', 
            'Laravel' 
        ]; 
        return view('welcome', [
            'books' => $books 
        ]);
        // return view('welcome')->with([
        //     'books' => $books 
        // ]);
    
        // return view('welcome')->withBooks($books);
     
    }

    public function hello()
    { 
        return view('hello');     
    }


    public function contact()
    {
        return view('contact');
    }

}
