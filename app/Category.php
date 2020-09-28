<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
	use Translatable;
	protected $translatable=['name'];

    public function service()
    {
    	return $this->belongsToMany('App\Service','category_services');
    }

    public function cars()
    {
    	return $this->hasMany('App\Car');
    }
}
