<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends BackendController
{
    public function index()
    {
        return view($this->pagePath . '.admin.show-admin-users', $this->data);

    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.admin.add-admin-user', $this->data);



        }
        if ($request->isMethod('post')) {

            dd($request->all());
        }
    }
}
