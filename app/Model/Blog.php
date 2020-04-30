<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'blog_id';
    protected $guarded = [];
    protected $fillable = [
        'blog_id', 'userId', 'imgSrc', 'slug', 'title',  'desc', 'categoryId', 'deleted_at', 'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'categoryId');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'userId')->select('user_id', 'name');
    }

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
