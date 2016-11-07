<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatto extends BaseModel
{
    protected $table="contatti";

    public function store($data) {
        $this->nome = $data['nome'];
        $this->cognome = $data['cognome'];
        $this->mail = $data['mail'];
        $this->save();
    }
    /**
     * Gli interessi che appartengono ai contatti.
     */
    public function interessi()
    {
        return $this->belongsToMany('App\Interesse')->withTimestamps();
    }
}
