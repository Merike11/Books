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
Route::get('/clients', 'ClientController@clients');

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
});

Route::get('/', function () {
    $books = DB::select('SELECT username AS "Klient" , COUNT(Book_id) AS "Tellimuste arv", SUM(price) AS "Kogusumma", YEAR(order_date) AS "Aasta"
    FROM clients c, orders o, books b
    WHERE c.id = o.client_id and o.book_id = b.id and status = "sent" AND Year(order_date) = 2017
    GROUP BY username ORDER BY SUM(price) desc;');
    dd($books);
    return view('form');    
});

Route::get('/', function () {
    $books = DB::select('SELECT title AS "Raamatu pealkiri", book_id AS "Tellimuste arv", DATE(order_date) AS "Müügi aeg"
    FROM  yl21_Books b, yl21_Orders o
    WHERE b.id = o.book_id AND status = "sent" AND YEAR(order_date) =2017    
    GROUP BY book_id ORDER BY COUNT(book_id) desc LIMIT 10;');
    dd($books);
    return view('form');    
});

Route::get('/', function () {
    $books = DB::select('SELECT (@row_number :=@row_number + 1) AS "Jrk nr", title AS "Raamatu pealkiri", 
    price AS "Hind" FROM books, 
    (SELECT @row_number := 0) AS t
    WHERE price > (SELECT AVG(price) FROM books) ORDER BY price desc;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT ROUND(SUM(price * stock_saldo),2) AS "Laoväärtus" FROM books;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT title AS "Pealkiri", MIN(price) AS "Kõige odavam raamat" FROM books;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT title AS "Pealkiri", MAX(price) AS "Kõige kallim raamat" FROM books;');
    dd($books);
    return view('form');   
});
Route::get('/', function () {
    $books = DB::select('SELECT title AS "Pealkiri", ROUND(AVG(price),2) AS "Keskmise hinnaga" FROM books;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT title AS "Pealkiri", MAX(price) AS "Kõige kallim kasutatud raamat" 
    FROM books WHERE  type = "used";');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT CASE books.type
        WHEN "new" THEN "Uus"
        WHEN "used" THEN "Kasutatud"
        WHEN "ebook" THEN "E-raamat"
        ELSE books.type
        END AS "Tüüp",round(AVG(books.price),2) AS "Keskmine hind",COUNT(books.stock_saldo) AS "Hulk" 
        FROM books books GROUP BY books.type;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT title AS "Pealkiri", ROUND(price,2) AS "Hind", type AS "Tüüp" 
    FROM books WHERE type = "used" AND (SELECT AVG(price) 
    FROM books WHERE type = "new") < price ORDER BY price asc;');
    dd($books);
    return view('form');    
});

Route::get('/', function () {
    $books = DB::select('SELECT  (@row_number :=@row_number + 1) AS "Jrk nr", title AS "Pealkiri", 
    release_date AS "Väljaandmise aasta" FROM books,
    (SELECT @row_number := 0) AS t WHERE MOD(release_date,2) = 0 
    ORDER BY release_date desc;');
    dd($books);
    return view('form');    
});
Route::get('/', function () {
    $books = DB::select('SELECT language AS "Keel", COUNT(id) AS "hulk" 
    FROM books GROUP BY language  ORDER BY COUNT(language) desc;');
    dd($books);
    return view('form');    
});
*/

Route::post('/send', function(Request $request){
    return view('form', ['request'=>$request]);
});
