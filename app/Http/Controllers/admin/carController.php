<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class carController extends Controller
{
    public function index(){
        
        return view('admin.car.index');
    }
    public function create(){
        return view('admin.car.insert');
    }
}
