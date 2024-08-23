

@extends('admin.layouts.layout')

 
@section('content')
<div class="app-content">
   <div class="content-wrapper">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="page-description">
                    <h1>BLOGS<a href="{{route('blog/form')}}" class="btn btn-warning float-end">ADD BLOGS</a>
                    </h1>
                   </div>
               </div>
           </div>
           @if (session('status'))
           <div class="alert alert-success">
               {{ session('status') }}
           </div>
       @endif
       @if (session('alert'))
           <div class="alert alert-danger">
               {{ session('alert') }}
           </div>
       @endif
           <div class="card-body " style="height: 100%">
               <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">Title</th>
                       <th scope="col">Description</th>
                       <th scope="col">Short description</th>
                       <th scope="col">Image</th>
                       <th scope="col">Action</th>
                       
                     </tr>
                   </thead>
                   <tbody>
                       @foreach ( $blog as $blog )
                    <tr>
                        <td>{{$blog->title}}</td>
                        <td>{!!$blog->description!!}</td>
                        <td>{{$blog->short_description}}</td>
                        <td><img src="{{  $blog->image }}" style="width:50px;height:40px;" alt=""></td>
                        <td>
                            <a href="{{ url("blog/edit/".$blog->id) }}" class="btn btn-primary">Update</a>
                            <a href="{{ url("blog/edit/".$blog->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
@endforeach
                   </tbody>
       
       </div>
   </div>
@endsection