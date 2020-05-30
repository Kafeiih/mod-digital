<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Digital extends Model
{
    //
    protected $table = 'mod_digital';

    protected $fillable = [
        'name', 
        'description', 
        'url', 
        'descargar', 
        'formato_id'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function formato()
    {
        return $this->belongsTo(Formato::class);
    }
}
