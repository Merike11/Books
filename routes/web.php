<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'BookController@index');
Route::get('/books', 'BookController@books');
Route::get('/books/{year}', 'BookController@books');
Route::get('/authors', 'AuthorController@authors');
Route::get('/orders', 'OrderController@orders');

/*Route::get('/', function () {
    $books = DB::select('SELECT * FROM books');
    dd($books);
    return view('form');
});

Route::get('/', function () {
    $books = DB::select('SELECT * FROM books WHERE release_date >= 2010 AND type = "new" ORDER BY title;');
    dd($books);
    return view('form');
});

Route::get('/', function () {
    $books = DB::select('SELECT title, release_date, price, "type" FROM books WHERE release_date < 1970 
    AND type = "used" AND price < 20;');
    dd($books);
    return view('form');
});

Route::get('/', function () {
    $books = DB::select('SELECT year(orders.order_date) AS "Aasta", COUNT(orders.order_date) AS "Tellimuste arv" 
    FROM orders LEFT JOIN books ON orders.book_id = books.id GROUP BY year(order_date);');
    dd($books);
    return view('form');    
});

Route::get('/', function () {
    $books = DB::select('SELECT year(orders.order_date) AS "Aasta", SUM(books.price) AS "Müükide summa" 
    FROM orders LEFT JOIN books ON orders.book_id = books.id GROUP BY year(order_date);');
    dd($books);
    return view('form');    
});

Route::get('/', function () {
    $books = DB::select('SELECT year(orders.order_date) AS "Aasta", SUM(books.price) AS "Müükide summa" 
    FROM orders LEFT JOIN books ON orders.book_id = books.id WHERE year(order_date) = 2017 GROUP BY year(order_date);');
    dd($books);
    return view('form');    
});*/

Route::post('/send', function(Request $request){
    return view('form', ['request'=>$request]);
});
