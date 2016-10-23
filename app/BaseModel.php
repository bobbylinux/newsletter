<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    const CREATED_AT = 'data_creazione';

    const UPDATED_AT = 'data_modifica';

    const DELETED_AT = 'data_cancellazione';
}
