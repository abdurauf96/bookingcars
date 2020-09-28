<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Car extends Model
{
	use Translatable;
	protected $translatable=['name'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function services()
    {
    	return $this->belongsToMany('App\Service', 'car_services');
    }

    public function regions()
    {
        return $this->belongsToMany('App\Region', 'car_regions');
    }
}
