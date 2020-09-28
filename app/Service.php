<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
	use Translatable;
    protected $translatable=['title', 'description', 'body'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'category_services');
    }

    public function cars()
    {
    	return $this->belongsToMany('App\Car', 'car_services');
    }
}   

