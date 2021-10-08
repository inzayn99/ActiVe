<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminUser\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminUserController extends BackendController
{
    public function index(Request $request)
    {

        if (!empty($request->search_admin_users)) {
            $criteria = $request->search_admin_users;
            $userData = AdminUser::where('name', 'LIKE', '%' . $criteria . '%')
                ->orwhere('username', 'LIKE', '%' . $criteria . '%')
                ->orwhere('email', 'LIKE', '%' . $criteria . '%')->get();

            $this->data('userData', $userData);
            return view($this->pagePath . '.admin.show-admin-users', $this->data);
        } else {


            $userData = AdminUser::orderBy('id', 'desc')->get();
            $this->data('userData', $userData);
            return view($this->pagePath . '.admin.show-admin-users', $this->data);
        }


    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.admin.add-admin-user', $this->data);


        }
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'username' => 'required|min:3|max:20|unique:admin_users,username',
                'email' => 'required|email|unique:admin_users,email',
                'password' => 'required|min:3|max:20|confirmed',
                'password_confirmation' => 'required|',
                'image' => 'mimes:jpeg,jpg,png,svg,gif'
            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadpath = public_path('uploads/admins');
                if (!$file->move($uploadpath, $imageName)) {
                    return redirect() - back()->with('error', 'File not upload');
                }

                $data['image'] = $imageName;
            }

            if (AdminUser::create($data)) {
                return redirect()->route('admin-users')->with('success', 'Data was successfully inserted');
            } else {
                return redirect()->back()->with('error', 'Data was not inserted');

            }
        }
    }

//------------Status----------------//
    public function updateStatus(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findOrFail($criteria);

            if (isset($_POST['active'])) {
                $findUser->status = 0;
                $message = "Status was inactive";

            }
            if (isset($_POST['inactive'])) {
                $findUser->status = 1;
                $message = "Status was active";

            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);
            }
        }
    }
    //-----------------end status-----------------------//


//----------------UserType--------------//
    public function updateAdminType(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findOrFail($criteria);

            if (isset($_POST['super_admin'])) {
                $findUser->admin_type = 'admin';
                $message = "Super Admin Type was changed";

            }
            if (isset($_POST['admin'])) {
                $findUser->admin_type = 'super-admin';
                $message = "Admin Type was changed";

            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);
            }
        }
    }

    //-----------End User Type----------------//

    //----------Img Delete-------------//
    function deleteFiles($id)
    {
        $finedData = AdminUser::findOrFail($id);
        $fileName = $finedData->image;
        $filePath = public_path('uploads/admins/' . $fileName);

        if (file_exists($filePath) && is_file($filePath)) {
            return unlink($filePath);
        }
        return true;
    }

//----------------------end img Delete----------//

    public function delete(Request $request)
    {
        $id = $request->criteria;
        $this->deleteFiles($id);
        if ($this->deleteFiles($id) && AdminUser::findOrFail($id)->delete()) {
            return redirect()->back()->with('success', 'Data was deleted');
        }
    }

    //-----------Edit-------------------------------//

    public function edit(Request $request)
    {
        $id = $request->criteria;
        $AdminData = AdminUser::findOrFail($id);
        $this->data('adminData', $AdminData);
        return view($this->pagePath . '.admin.edit-admin', $this->data);
    }


    public function editAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $id = $request->criteria;
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'username' => 'required|min:3|max:20|', [
                    Rule::unique('admin_users', 'username')->ignore($id)
                ],
                'email' => 'required|email|', [
                    Rule::unique('admin_users', 'email')->ignore($id)
                ],
                'image' => 'mimes:jpeg,jpg,png,svg,gif'
            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadpath = public_path('uploads/admins');
                if ($this->deleteFiles($id) && $file->move($uploadpath, $imageName)) {
                    $data['image'] = $imageName;
                }


            }

            if (AdminUser::findOrFail($id)->update($data)) {
                return redirect()->route('admin-users')->with('success', 'Data was successfully updated');
            } else {
                return redirect()->back()->with('error', 'Data was not updated');

            }
        }
    }
    //-----------end edit-----------------------------//

    //-------------login------------------------------//
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->backendPath . '.admin-login.index', $this->data);

        }
        if ($request->isMethod('post')) {
           dd($request->all());


        }
    }

}
