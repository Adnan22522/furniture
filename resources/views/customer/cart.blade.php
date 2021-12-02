@extends('layouts.main')
@section('table')
<link rel="stylesheet" href="{{asset('public/style/cart-style.css')}}">
@endsection()
@section('content')

@include('customer.inc.topnavbar')
@include('customer.inc.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="border-bottom"></div>
    <!-- /.content-header -->

    <style type="text/css">

	
</style>


<div class="shopping-cart" style="margin-top: 0px;">
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
 	
 @if(count($items)>0)
 @foreach($items as $item)
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="{{asset('public/images/'.$item->item['pic'])}}" height="65" width="80" alt="" />

    </div>
 
    <div class="description">
		<h5 class="mt-4">{{$item->item['name']}}</h5>
      <!-- <span>Bball High</span>
      <span>White</span> -->
    </div>
 
    <div class="quantity">
      <!-- <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button> -->
    </div>
 
    <div class="total-price">Rs.{{$item->item['sales_price']}}</div>
  </div>
 @endforeach()
 @endif()
  <!-- Product #2 -->
  
</div>


@endsection()
