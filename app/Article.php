<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public function path()
   {
       return route('articles.show', $this);
   }
}

public function user()