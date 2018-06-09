<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
    
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
