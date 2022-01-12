<?php

namespace App\Models\MainPost;

use Illuminate\Database\Eloquent\Model;

class MainPost extends Model
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
}
