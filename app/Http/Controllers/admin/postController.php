<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class postController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('admin.post.index',compact('blog'));
    }
public function form(){
    return view('admin.post.insert');
}
public function store( Request $req){
 $blog= new Blog();
 $blog->title=$req->input('title');
 $blog->meta_title=$req->input('meta_title');
 $blog->short_description=$req->input('short_description');
 $blog->description=$req->input('description');
 $blog->meta_description=$req->input('meta_description');
 $blog->date=now()->toDateString();

 if ($req->file('image')) {
    $blog->image = asset(Storage::url($req->file('image')->store('public/blog')));
}
// if ($req->hasFile('image')) {
//     $path = $req->file('image')->store('public/blog');
//     $blog->image = Storage::url($path);
// }


$blog->save();
return redirect('/home');
}
public function edit(){
    return view('admin.post.update');
}
}
