<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table = 'mod_digital_formato';

    protected $fillable = [
        'name', 'desciption', 'url',
    ];

    public function Digitales()
    {
        return $this->belongsTo(Digital::class);
    }
}
