<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgriProductsController extends Controller
{
    public function index()
    {
        return view('pages/agriproducttrading');
    }
}
