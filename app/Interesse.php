<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends BaseModel
{

    private $table = "interessi";

    public function save($data) {
        $this->nome = $data['nome'];
    }

    /**
     * I contatti che appartengono agli interessi.
     */
    public function contatti()
    {
        return $this->belongsToMany('App\Contatto')->withTimestamps();
    }

}
