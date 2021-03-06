<?php

namespace App\Models\Category;

use App\Models\AdminUser\AdminUser;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name',
        'slug',
        'date',
        'meta_keywords',
        'meta_description',
        'description',
        'summary',
        'status',
        'posted_by'
    ];

    public function subCategoryData()
    {
        return $this->hasMany(SubCategory::class, 'cat_id', 'id');
    }

    public function postedBy()
    {
        return $this->belongsTo(AdminUser::class, 'posted_by', 'id');
    }
}
