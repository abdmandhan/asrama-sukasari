<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impression extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'impression_id', 'message', 'imgSrc', 'name', 'majorId',  'hidden'
    ];
}
