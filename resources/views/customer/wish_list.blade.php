@extends('layouts.main')

	@section('table')
	<link rel="stylesheet" href="{{asset('public/style/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
	@endsection

@section('content')

@include('customer.inc.topnavbar')
@include('customer.inc.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Item List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/customer/dashboard')}}" class="active">Dashboard</a></li>
              <li class="breadcrumb-item active"> Item List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="border-bottom"></div>
    <!-- /.content-header -->

    @if(session('message'))
    	<div class="alert alert-success">{{session('message')}}</div>
    @endif

    @if(session('error'))
    	<div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Company Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($items)>0)
                @foreach($items as $item)
                <tr>
                  <td>{{$item->item->id}}</td>
                  <td><img src="{{asset('public/images/'.$item->item->pic)}}" height="50" width="70"></td>
                  <td>{{$item->item->name}}</td>
                  <td>{{$item->item->company_name}}</td>
                  <td>{{$item->item->category->name}}</td>
                  <td>{{$item->item->sales_price}}</td>
                  <td>
                  	<a href="{{url('customer/store/add',$item->item_id)}}" class="btn btn-success btn-sm" title="Add to cart">Add to cart</a>
                    <a href="javascript:;" onclick="confirmdelete('{{$item->item_id}}')" class="btn btn-danger btn-sm">Delete</a>
                  <form action="{{route('wishlist.destroy',$item->item_id)}}" id="delete-item-{{$item->item_id}}" method="post" style="display: none;">
                      @csrf
                      @method('DELETE')
                    <input type="submit" name="submit" >
                    </form>
              	  </td>
                </tr>
                @endforeach()
                @endif()
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Company Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>

		<script type="text/javascript">
		  function confirmdelete(id){
		    let choice = confirm("Are you Sure You Want To Delete");
		    if(choice){
		      document.getElementById('delete-item-'+id).submit.click();
		    }
		  }
		</script>

@endsection()

@section('tablescript')

<script src="{{asset('public/style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/style/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/style/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection()