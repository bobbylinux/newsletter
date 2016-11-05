<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatto extends BaseModel
{
    protected $table="contatti";

    /**
     * I riferimenti che appartengono ai contatti.
     */
    public function riferimenti()
    {
        return $this->belongsToMany('App\Riferimento')->withPivot('valore', 'cancellato')->withTimestamps();
    }

    /**
     * Gli interessi che appartengono ai contatti.
     */
    public function interessi()
    {
        return $this->belongsToMany('App\Interesse')->withTimestamps();
    }
}
