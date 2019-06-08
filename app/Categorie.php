<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    public function product()
    {
      return $this->hasMany('App\Post', 'Categorie','Name');
    }

    public function delete()
    {
        // delete all related photos 
        $this->product()->delete();
        // as suggested by Dirk in comment,
        // it's an uglier alternative, but faster
        // Photo::where("user_id", $this->id)->delete()

        // delete the user
        return parent::delete();
    }
}
