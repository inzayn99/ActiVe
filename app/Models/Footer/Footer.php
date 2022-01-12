<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'title',
        'date',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'posted_by'
    ];}

