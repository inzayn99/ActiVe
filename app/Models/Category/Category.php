<?php

namespace App\Models\Category;

use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name',
        'slug',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'posted_by'
    ];

    public function subCategoryData()
    {
        return $this->hasMany(SubCategory::class,'cat_id','id');
    }
}
