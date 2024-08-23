<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class rolesController extends Controller
{
    public function index(){
        $data = Role::get();
return view('roles&permissions.roles.index' ,compact('data'));
    }
    public function create(){
        return view('roles&permissions.roles.create');
    }
    public function store(Request $req ){
       
           
              Role::create([
                'name' => $req -> name
            ]);
         return redirect('role');
    }
    public function given($id){
        $role = Role::find($id);
        $permission = Permission::get();
        return view('roles&permissions.roles.given_permissions' ,compact('role','permission'));
    }
    
    public function givenPermission(Request $req ,$id){
        $role = Role::find($id);
        $role ->syncPermissions([$req->permission]);
        return redirect('role');
    }
 
}
