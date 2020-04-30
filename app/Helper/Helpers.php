<?php

use Illuminate\Database\Eloquent\Model;

if (!function_exists('getModelFields')) {
    function getModelFields(Model $Model)
    {
        $model = new $Model();
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();

        foreach ($columns as $column) {
            if (!array_key_exists($column, $attributes)) {
                $arr[] = $column;
            }
        }
        $attributes = $arr;
        return $attributes;
    }
}
