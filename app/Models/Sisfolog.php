<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Sisfolog extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    public $table = 'logistik';
}
