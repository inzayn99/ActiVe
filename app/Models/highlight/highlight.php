<?php

namespace App\Models\highlight;


use App\Models\AdminUser\AdminUser;
use App\Models\FlashNews\FlashNews;
use Illuminate\Database\Eloquent\Model;

class highlight extends Model
{
    protected $fillable = [
        'title',
        'date',
        'image',
        'thumbnail',
        'meta_keywords',
        'meta_description',
        'description',
        'summary',
        'status',
        'posted_by'
    ];

//    public function subCategoryData()
//    {
//        return $this->hasMany(FlashNews::class, 'title', 'id');
//    }
//
//    public function postedBy()
//    {
//        return $this->belongsTo(AdminUser::class, 'posted_by', 'id');
//    }
}
