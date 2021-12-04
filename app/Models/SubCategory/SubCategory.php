<?php

namespace App\Models\SubCategory;

use App\Models\AdminUser\AdminUser;
use App\Models\Category\Category;
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

    public function postedBy()
    {
        return $this->belongsTo(AdminUser::class, 'posted_by', 'id');
    }


    public function CategoryData()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
