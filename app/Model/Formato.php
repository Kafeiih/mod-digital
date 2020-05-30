<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table = 'mod_digital_formato';

    protected $fillable = [
        'name', 
        'desciption', 
        'url',
    ];

    public function digital()
    {
         return $this->hasMany(Digital::class); //usar Torre en singular e inicial en mayúsculas al ser el nombre del modelo
    }
}
