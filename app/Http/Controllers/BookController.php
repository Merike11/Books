<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return "test";
    }
    public function newBooksReleaseYearByTitle($year){
        $books = Book::where('release_date', '>=', $year)
            ->where('type', 'new')
            ->orderBy('title')
            ->with('orders')
            -> get(['id', 'title', 'release_date', 'price', 'type']);

        return $books;
    }
    public function allBooks(){
        $books = Book::all()->get();
        return $books;
    }
    public function usedBooksReleaseYearByPrice(){
        $books = Book::where([['release_date', '<', 1970],
        ['type', 'used'],
        ['price', '<', '20']])
        ->get(['title', 'release_date', 'price', 'type']);
        return $books;
    }
    
    }
}
