<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');//under view if you call the name the file must be blade
    }
    public function show($id)
    {
        echo $id;
        return view('frontend.show_item');
    }
}
