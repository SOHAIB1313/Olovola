

@extends('admin.layouts.layout')

 
@section('content')
<div class="app-content">
   <div class="content-wrapper">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="page-description">
                    <h1>CARS<a href="{{route('car')}}" class="btn btn-warning float-end">ADD CARS</a>
                    </h1>
                   </div>
               </div>
           </div>
           {{-- @if (session('status'))
           <div class="alert alert-success">
               {{ session('status') }}
           </div>
       @endif
       @if (session('alert'))
           <div class="alert alert-danger">
               {{ session('alert') }}
           </div>
       @endif --}}
           <div class="card-body " style="height: 100%">
               <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">Name</th>
                       <th scope="col">Title</th>
                       <th scope="col">Description</th>
                       <th scope="col">Short description</th>
                       <th scope="col">Image</th>
                       <th scope="col">Action</th>
                       
                     </tr>
                   </thead>
                   <tbody>
                     {{-- @foreach ( $car as $car )
                    <tr>
                        <td>{{$car->name}}</td>
                        <td>{{$car->title}}</td>
                        <td>{!!$car->description!!}</td>
                        <td>{{$car->short_description}}</td> --}}
                        {{-- <td><img src="{{  $car->stroge->image }}" style="width:50px;height:40px;" alt=""></td> --}}
                        {{-- <td>
                            <a href="{{ url("blog/edit/".$car->id) }}" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
@endforeach  --}}
                   </tbody>
       
       </div>
   </div>
@endsection