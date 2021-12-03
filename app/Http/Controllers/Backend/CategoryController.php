<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
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

//------Add data------//
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

//---------------Category Data delete--------------//
    public function delete(Request $request)
    {
        $id = $request->criteria;
        $totalSubCat = SubCategory::where('cat_id', '=', $id)->count();
        if ($totalSubCat > 0) {
            return redirect()->back()->with('error', "can't delete this data belong to another table");


        } else {
            if (Category::findOrFail($id)->delete()) {
                return redirect()->back()->with('succes', 'Data was successfully Deleted');
            }

        }
    }

//---------------Category Data delete--------------//

    public function edit(Request $request)
    {
        $id=$request->criteria;
        $catData=Category::findOrFail($id);
        dd($catData);
    }

}
