<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'sequence', 'active', 'parent_id',
    ];
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function subCategories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id','id');
    }



}