<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Digital extends Model
{
    //
    protected $table = 'mod_digital';

    protected $fillable = [
        'name', 'desciption', 'url',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function Formatos()
    {
        return $this->hasMany(Digitales::class);
    }
}
