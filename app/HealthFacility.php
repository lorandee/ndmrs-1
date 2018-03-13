<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthFacility extends Model
{
    //
    public function healthSubDistrict()
    {
      return $this->belongsTo('App\HealthSubDistrict');
    }

}
