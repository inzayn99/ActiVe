<?php

namespace App\Models\Trending;

use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    protected $fillable = [
        'title',
        'date',
        'meta_keywords',
        'meta_description',
        'description',
        'summary',
        'status',
        'thumbnail',
        'posted_by'
    ];}

