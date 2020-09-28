<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CortageType extends Model
{
    use Translatable;
    protected $translatable=['cortage_type', 'cars'];
}
