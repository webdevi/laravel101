<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

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
}
