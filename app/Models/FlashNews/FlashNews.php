<?php

namespace App\Models\FlashNews;

use App\Models\AdminUser\AdminUser;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;

class FlashNews extends Model
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
        return $this->hasMany(FlashNews::class, 'title', 'id');
    }

    public function postedBy()
    {
        return $this->belongsTo(AdminUser::class, 'posted_by', 'id');
    }
}
