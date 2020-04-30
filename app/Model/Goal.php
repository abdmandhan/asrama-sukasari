<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'goal_id';
    protected $guarded = [];
    protected $fillable = [
        'goal_id', 'transision', 'imgSrc', 'title', 'desc',  'hidden'
    ];
}
