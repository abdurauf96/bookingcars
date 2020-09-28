<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Helicopter extends Model
{
    use Translatable;
	protected $translatable=['name', 'text1', 'text2'];
}
