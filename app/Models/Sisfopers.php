<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Sisfopers extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    public $table = 'biodata';
}
