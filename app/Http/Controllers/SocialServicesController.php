<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialServicesController extends Controller
{
    public function index(){
        return view("pages/socialservice");
    }
}
