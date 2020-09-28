<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Problem extends Model
{
    use Translatable;
    protected $translatable=['problem', 'answer'];
}
