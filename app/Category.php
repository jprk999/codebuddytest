<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable;
    public function parentCategory()
    {
        return $this->belongsTo('App\Category','parent_category_id','id');
    }

    public function childCategories()
    {
        return $this->hasMany('App\Category','parent_category_id','id');
    }
}
