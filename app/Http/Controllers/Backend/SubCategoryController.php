<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends BackendController
{
    public function index()
    {
        $this->data('subCategoryData', SubCategory::all());
        return view($this->pagePath . '.sub-category.sub-category', $this->data);


    }
}

