<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categoryId');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
