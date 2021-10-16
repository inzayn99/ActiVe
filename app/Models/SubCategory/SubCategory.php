<?php

namespace App\Models\SubCategory;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'sub_cat_name',
        'slug',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'cat_id',
        'posted_by'
    ];
}
