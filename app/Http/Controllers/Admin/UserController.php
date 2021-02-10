<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use App\Http\Requests\AdminRequest;
class UserController extends Controller
{
    public function index(){
        $users = Admin::latest()->where('id','<>',auth()->id())->paginate(PAGINATE_COUNT);

        return view('admin.users.index',compact('users'));
    }

    public function create(){
        $roles = Role::get();
        return view('admin.users.add',compact('roles'));
    }

    public function store(AdminRequest $request){
        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        if($user->save()){
            return redirect()->route('admin.users')->with(['success' => 'تمت الإضافة بنجاح']);
        }
        else{
            return redirect()->route('admin.users')->with(['error' => 'خطأ في المعلومات']);
        }
    }

    public function edit($id){
        $roles = Role::get();
        $user = Admin::findOrFail($id); 
        return view('admin.users.edit',compact('roles','user'));
    }

    public function update(AdminRequest $request,$id){
        $user = Admin::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        if($user->save()){
            return redirect()->route('admin.users')->with(['success' => 'تمت التحديث بنجاح']);
        }
        else{
            return redirect()->route('admin.users')->with(['error' => 'خطأ في المعلومات']);
        }
    }
}
