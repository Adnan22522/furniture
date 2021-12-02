@extends('layouts.main')
@section('content')

@include('admin.inc.topnavbar')
@include('admin.inc.sidebar')

<style type="text/css">
	.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Item</a></li>
              <li class="breadcrumb-item active">Add Item</li>
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
          <div class="alert alert-success col-md-4 col-sm-4">{{session('message')}}</div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger">{{session('error')}}</div>
        @endif

      <form action="{{route('item.store')}}" class="mt-5 ml-2" method="post" enctype="multipart/form-data">
        @csrf
        <div id="dynamicTable">
        
        <div class="col-sm-12 col-md-12">
        <div class="row">
        <div class="form-group col-sm-8 col-md-8">
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name"><br>
        
          <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name"><br>
       
       <div class="row">
        <div class="form-group col-sm-3 col-md-3">
        	<div class="form-group">
               <label>Purchase Price:</label>
                  <div class="input-group">
          <input type="number" name="purchase_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Purchase Price">
        </div>
    </div>
</div>
        <div class="form-group col-sm-3 col-md-3">
        	<div class="form-group">
               <label>Sales Price:</label>
                  <div class="input-group">
          			<input type="number" name="sales_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sales Price">
        		  </div>
    			</div>
			</div>
        
        <div class="form-group col-sm-3 col-md-3">
        	<div class="form-group">
               <label>Expiry Date:</label>
                  <div class="input-group">
          			<input type="date" name="expiry_date"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Expiry Date">
       				</div>
    			</div>
			</div>
        <div class="form-group col-sm-3 col-md-3">
        	<div class="form-group">
               <label>Select Category:</label>
                  <div class="input-group">
          			<select name="cat_id" class="form-control">
          				<option>Select Category</option>
          				@if(count($categories)>0)
                  @foreach($categories as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
                  @endif
          			</select>
      			  </div>
  				</div>
        	</div>
     	</div>
   </div>
       <div class="col-sm-2 col-md-2">
       	<div class="profile-img" >
            <img src="{{asset('public/images/no-thumbnail.png')}} " height="150" width="250" id="imgthumbnail" alt=""/>
         </div>
         <div class="fileUpload btn btn-primary">
    		<span>Upload Image</span>
    		<input type="file" name="image" class="upload" />
		</div>
       </div>
   </div>
     
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  
    </form>
</div>

@endsection()