<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory_operating_hour extends Model
{
    public function directory()
    {
        return $this->belongsTo('App\Directory');
    }
}
