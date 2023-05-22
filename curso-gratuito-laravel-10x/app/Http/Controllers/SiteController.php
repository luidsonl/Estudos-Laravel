<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contact(){
        return view('site/contact');
    }
    //retorna uma view chamada 'site/contact'
}
