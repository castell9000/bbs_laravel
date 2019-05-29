<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'content'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function article(){
        $this->belongsTo(Article::class);
    }
}
