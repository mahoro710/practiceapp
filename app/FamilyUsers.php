<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyUsers extends Model
{
    public function houseworsk()
    {
        return $this->hasMany('App\Housework');
    }
}
