<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';

        $items = DB::table('items')->get();

        return view('home', ['pageTitle' => $pageTitle, 'items' => $items]);
    }
}
