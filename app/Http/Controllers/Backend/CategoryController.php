<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends BackendController
{
    public function index()
    {

        $this->data('categoryData',Category::orderBy('id','desc')->get());
        return view($this->pagePath.'.category.show-category',$this->data);

    }

    public function add(Request $request)
    {

    }
}
