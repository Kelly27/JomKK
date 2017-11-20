<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    public function directory_operating_hours()
    {
        return $this->hasMany('App\Directory_operating_hour');
    }
}
