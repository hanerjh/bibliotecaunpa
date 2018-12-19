<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    public function tipo_recuros(){

        return $this->belongsTo(resourse::class);
    }
}
