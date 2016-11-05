<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riferimento extends BaseModel
{

    protected $table = "riferimenti";

    /**
     * I contatti che appartengono ai riferimenti.
     */
    public function users()
    {
        return $this->belongsToMany('App\Contatto')->withPivot('valore', 'cancellato')->withTimestamps();
    }
}
