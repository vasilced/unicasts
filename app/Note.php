<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [ 
        'summary'
    ];
    
    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
