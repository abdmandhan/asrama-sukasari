<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'activity_id', 'weight', 'imgSrc', 'hidden'
    ];

    public static function getAllAttributes()
    {
        $model = new self();
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();

        foreach ($columns as $column) {
            if (!array_key_exists($column, $attributes)) {
                $arr[] = $column;
            }
        }
        $attributes['attribute'] = $arr;
        return $attributes;
    }
}
