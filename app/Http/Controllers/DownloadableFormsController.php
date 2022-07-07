<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadableFormsController extends Controller
{
    public function index(){
    return view('pages/downloadableforms');
    }
}
