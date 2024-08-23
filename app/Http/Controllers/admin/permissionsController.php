<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class permissionsController extends Controller
{
    public function index(){
        $data = Permission::get();
return view('roles&permissions.permissions.index' ,compact('data'));
    }
    public function create(){
        return view('roles&permissions.permissions.create');
    }
    public function store(Request $req ){
       
           
              Permission::create([
                'name' => $req -> name
            ]);
         return redirect('permission');
    }
   
}
