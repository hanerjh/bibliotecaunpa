<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_resource extends Model
{
    //asigno la tabla tipo_recursos al modelo type_resources
    protected $table="tipo_recursos";

     

    public function recurso(){
        return $this->hasMany(resource::class);
    } 

}
