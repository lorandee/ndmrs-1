<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public function districts()
    {
      # code...
      return $this->hasMany('App\District');
    }
    public function healthSubDistricts()
    {
      # code...
      return $this->hasManyThrough('App\healthSubDistrict','App\District');
    }
}
