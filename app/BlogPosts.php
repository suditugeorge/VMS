<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    protected $table = 'bposts';
    public $timestamps = false;

    public function blog_categorie()
    {
        return $this->hasOne('App\BlogCategories', 'id', 'bcategory_id');
    }

    public function autor()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }
}
