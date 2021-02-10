<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\RolesRequest;
use Carbon\Carbon;
class RolesController extends Controller
{
    public function index(){
        $roles = Role::get();
        return view('admin.roles.index',compact('roles'));
    }

    public function create(){
        return view('admin.roles.add');
    }

    public function store(RolesRequest $request){
        try {
            $role = $this->process(new Role, $request);
            if($role){
                return redirect()->route('admin.roles')->with(['success' => 'تمت الإضافة بنجاح']);
            }
            else{
                return redirect()->route('admin.roles')->with(['error' => 'خطأ في المعلومات']);
            }
        } catch (\Throwable $e) {
            
            return redirect()->route('admin.roles')->with(['error' => 'خطأ في المعلومات']);
        }
    }
   
    public function edit($id){
        $role = Role::findOrFail($id);
       
        return view('admin.roles.edit',compact('role'));
    }

    public function update($id,RolesRequest $request){
        try {
            $role = Role::findOrFail($id);
            $role = $this->process($role, $request);
            if($role){
                return redirect()->route('admin.roles')->with(['success' => 'تم التحديث بنجاح']);
            }
            else{
                return redirect()->route('admin.roles')->with(['error' => 'خطأ في المعلومات']);
            }
        } catch (\Throwable $e) {
            
            return redirect()->route('admin.roles')->with(['error' => 'خطأ في المعلومات']);
        }
    }

    protected function process(Role $role, Request $request){
        $role->name = $request->name;
        $role->permissions = json_encode($request->permissions);
        $role->save();
        return $role;
    }
}
