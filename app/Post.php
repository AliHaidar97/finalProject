<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //
    public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }
}
