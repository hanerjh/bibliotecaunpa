<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table="eventos";

    public function tipoeventos(){

        return $this->belongsTo(tipoeventos::class);
    }
}
