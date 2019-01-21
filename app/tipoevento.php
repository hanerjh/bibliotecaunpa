<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoevento extends Model
{
    //asigno la tabla tipo_recursos al modelo type_resources
    protected $table="tipoevento";

     

    public function evento(){
        return $this->hasMany(eventos::class);
    } 
   
}
