<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste_article(){
        return view('article/liste');
    }
}
