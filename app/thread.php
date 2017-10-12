<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    public function comment()
    {

    	return $comment->hasone("App\comment");
    }
}
