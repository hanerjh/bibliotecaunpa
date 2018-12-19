<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_resource extends Model
{
    public function recurso(){

        return $this->hasMany(type_resource::class);
    } 

}
