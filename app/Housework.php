<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Housework extends Model
{
  use SoftDeletes;
  

  protected $fillable = [
        'title',
        'memo',
        'user_id',
        'weekday',
        'time'
        ];
        
  public function user()
  {
    return $this->belongsTo('App\FamilyUsers');
  }
}