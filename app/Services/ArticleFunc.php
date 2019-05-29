<?php
/**
 * Created by PhpStorm.
 * User: prtscn
 * Date: 2019-05-29
 * Time: 18:35
 */

namespace App\Services;


use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleFunc
{
    static public function store(Request $request){
        $title = null;
        $content = null;

        $title = $request->input('title');
        $content = $request->input('content');
        $user_id = auth()->user()->id;

        $articleArr[] = [
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),
        ];

        Article::insert($articleArr);

        return $message="글이 저장되었습니다.";
    }

    static public function articlePage(){
        $articles = null;

        $articles = Article::latest()->paginate(10);

        return $articles;
    }
}