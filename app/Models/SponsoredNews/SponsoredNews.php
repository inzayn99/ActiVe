<?php

namespace App\Models\SponsoredNews;

use Illuminate\Database\Eloquent\Model;

class SponsoredNews extends Model
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
