<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = 'songs_data';

    protected $fillable = [
        'title', 'artist', 'lyrics',
    ];
}
