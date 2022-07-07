<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndUpdatesController extends Controller
{
    //
    public function index(){
        return view('pages/newsandupdates');
    }
}
