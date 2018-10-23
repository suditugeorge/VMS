<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    protected $table = 'bcategories';
    public $timestamps = false;

    public function parinte()
    {
        return $this->hasOne('App\BlogCategories', 'id', 'bcategory_parent_id');
    }
}
