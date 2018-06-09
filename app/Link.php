<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'path'
    ];

    public function note()
    {
        return $this->belongsTo(Note::class);
    }
}
