<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    protected $table="recursos";

    public function tipo_recuros(){

        return $this->belongsTo(type_resourse::class);
    }
}
