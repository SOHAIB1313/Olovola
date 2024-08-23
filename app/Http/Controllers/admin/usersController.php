<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function index(){
        $user= User::get();
        return view('roles&permissions.users.index',compact('user'));
    }
    public function create(){
        $role= Role::pluck('name','name')->all();
        return view('roles&permissions.users.create',compact('role'));
    }
    public function store(Request $req){
        $user=User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);
        $user->syncRoles([$req->role]);
        return redirect('user');
    }
}
