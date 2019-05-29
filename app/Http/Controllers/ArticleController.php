<?php

namespace App\Http\Controllers;

use App\Services\ArticleFunc;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formArticle(){
        return view('/articleWrite');
    }

    public function storeArticle(Request $request){
        $this->validate($request,[
           'title' => 'required|min:5',
           'content' => 'required|min:10',
        ]);

        $service = ArticleFunc::store($request);
        flash($service);
        return redirect('/article');
    }

    public function listArticle(){
        $articles = null;

        $articles = ArticleFunc::articlePage();

        return view('list', compact('articles'));
    }

}
