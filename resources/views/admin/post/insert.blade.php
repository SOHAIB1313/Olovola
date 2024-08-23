

@extends('admin.layouts.layout')

 
@section('content')
<div class="app-content">
   <div class="content-wrapper">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="page-description">
                    <h1>ADD POST<a href="{{route('blog')}}" class="btn btn-warning float-end">Back</a>
                    </h1>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-xl-12">
                <div class="card  bg-light   col-md-12" style="height:100%;">
                   
                    <div class="card-body">
                        <form action="{{url('blog/store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                    <div class="row">

                                <div class="col-md-5 m-3">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="col-md-5 m-3">
                                    <label for="">Meta title </label>
                                    <input type="text" class="form-control" name="meta_title">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    
                                    <div class="col-md-5 m-3">
                                        <label for="">Meta description</label>
                                        <textarea name="meta_description" rows="1"   class="form-control"></textarea> 
                                    </div>
                                    <div class="col-md-5 m-3">
                                        <label for="">Short description</label>
                                        <textarea name="short_description" rows="1"   class="form-control"></textarea> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 m-3">
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="image">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 m-3 ">
                                <label for="">Description</label>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <textarea name="description" rows="1"   id="summernote" class="form-control"></textarea> 
                                        
                                       
                                    </div>
                            </div>
                            
                                <div class="col-md-12 m-3 ">
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
               </div>
           </div>
       </div>
   </div>
@endsection