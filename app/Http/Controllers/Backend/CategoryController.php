<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BackendController
{
    public function index()
    {

        $this->data('categoryData', Category::orderBy('id', 'desc')->get());
        return view($this->pagePath . '.category.show-category', $this->data);

    }

    function slugGenerator($data)
    {
        return str_replace(' ', '-', trim($data));

    }

    public function add(Request $request)
    {

        if ($request->isMethod('get')) {
            return view($this->pagePath . '.category.add-category', $this->data);

        }
        if ($request->isMethod('post')) {
            $catObj = new Category();
            $catObj->cat_name = $request->cat_name;
            $catObj->slug = $this->slugGenerator($request->slug);
            $catObj->meta_keywords = $request->mata_keywords;
            $catObj->meta_description = $request->mata_description;
            $catObj->description = $request->description;
            $catObj->posted_by = Auth::guard('admin')->user()->id;
            if ($catObj->save()) {
                return redirect()->route('category')->with('success', 'Data was successfully inserted');
            }

        }
    }

    public function edit($id)
    {
        $categoryData = Category::findOrFail($id);
        $this->data('categoryData', $categoryData);
        return view($this->pagePath . '.category.edit-category', $this->data);
    }
}
