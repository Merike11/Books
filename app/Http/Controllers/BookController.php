<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return "test";
    }
    public function books($year){
        $books = Book::where('release_date',$year)-> get();

        return $books;
    }
}
