@extends('layouts.main')
@section('content')

@include('admin.inc.topnavbar')
@include('admin.inc.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Category</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="border-bottom"></div>
    <!-- /.content-header -->

    @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif

        @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif

        @if(count($categories)>0)
        @foreach($categories as $category)
        <div class="container">
        <form action="{{route('category.update',$category->id)}}" class="mt-5 ml-2" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="col-sm-12 col-md-12">
        <div class="row">
        <div class="form-group col-sm-8 col-md-8">
          <input type="text" name="name" class="form-control" value="{{$category->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name">
    	</div>
    	  <input type="submit" name="submit" style="height: 40px;" class="btn btn-primary btn-sm">
  		</div>
	</div>
</form>
</div>
@endforeach()
@endif()


@endsection()