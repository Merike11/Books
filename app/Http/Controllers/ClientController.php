<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clients(){
        $clients = Client::all();

        return $clients;
    }
}
