<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
    $articles = Article::paginate(12) ;
    // dd($articles->toArray());
    return view('welcome', compact('articles'));
    // return view('welcome', ['articles' => $articles]);
   }

   public function about() {
    return view('about');
   }
}
