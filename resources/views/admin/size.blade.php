@extends('admin.layout')
@section('page_title', 'size')
@section('size_select', 'active')

@section('container')
@if (session()->has('message'))
<h1 class="text-center">size</h1>
    <div class="alert alert-success">
    {{session('message')}}
    </div>
 @endif
<a href="{{url('admin/size/manage_size')}}">    
    <button type="button" class="btn btn-secondary">Add Size</button>
</a>

<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>ID</th>
                <th>size Name</th>
                  <th>Action</th>
                 
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
               <tr>
                <th>{{$list->id}}</th>
                <th>{{$list->size}}</th>
                <th>
                <a href="{{url('admin/size/delete')}}/{{$list->id}}">
                <button type="button" class="btn btn-danger">Delete</button></a>
                
              @if ($list->status == 1)
              <a href="{{url('admin/size/status/0')}}/{{$list->id}}">
                <button type="button" class="btn btn-primary">Active</button></a>
              @elseif($list->status == 0)
              <a href="{{url('admin/size/status/1')}}/{{$list->id}}">
                <button type="button" class="btn btn-warning">Deactive</button></a>
                @endif

                <a href="{{url('admin/size/manage_size')}}/{{$list->id}}">
                <button type="button" class="btn btn-success">Edit</button></a>
               </th>
                 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
        <!-- END DATA TABLE-->
    </div>
</div>


@endsection 