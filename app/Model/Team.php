<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'team_id', 'imgSrc', 'facebookSrc', 'twitterSrc',  'instagramSrc', 'name', 'position', 'majorId', 'hidden'
    ];
}
