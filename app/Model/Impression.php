<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impression extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
