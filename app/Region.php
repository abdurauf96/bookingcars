<?php

namespace App;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use Translatable;
    protected $translatable=['region'];
    
    public function cars()
    {
    	return $this->hasMany('App\Car');
    }
}
