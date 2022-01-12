<?php

namespace App\Models\TrendingTopics;

use Illuminate\Database\Eloquent\Model;

class TrendingTopics extends Model
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
