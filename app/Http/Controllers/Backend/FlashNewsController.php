<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\FlashNews\FlashNews;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlashNewsController extends BackendController
{

    public function index()
    {

        $this->data('categoryData', Category::orderBy('id', 'desc')->get());
        return view($this->pagePath . '.flash-news.flash-news', $this->data);

    }

    function slugGenerator($data)
    {
        return str_replace(' ', '-', trim($data));

    }

//------Add data------//
    public function add(Request $request)
    {

        if ($request->isMethod('get')) {
            return view($this->pagePath . '.flash-news.add-flash-news', $this->data);

        }
    }
}

