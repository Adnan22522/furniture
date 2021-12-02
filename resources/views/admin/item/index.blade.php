@extends('layouts.main')

	@section('table')
	<link rel="stylesheet" href="{{asset('public/style/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
	@endsection

@section('content')

@include('admin.inc.topnavbar')
@include('admin.inc.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Items</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Item</a></li>
              <li class="breadcrumb-item active">All Items</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
    <div class="border-bottom"></div>
    <!-- /.content-header -->
    <div class="container">
    <div class="card">
            
            <!-- /.card-header -->
            @if(count($items)>0)
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Picture</th>
                  <th>Items</th>
                  <th>Company Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Expiry Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td><img src="{{asset('public/images/'.$item->pic)}}" height="50" width="50"></td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->company_name}}</td>
                  <td>{{$item->category->name}}</td>
                  <td>{{$item->purchase_price}}</td>
                  <td>{{$item->expiry_date}}</td>
                  <td>
                    <a href="{{route('item.edit',$item->id)}}" class="btn btn-success btn-sm">Edit </a>|
                    <a href="{{route('item.show',$item->id)}}" class="btn btn-primary btn-sm">Review </a>|
                    <a href="javascript:;" onclick="confirmdelete('{{$item->id}}')" class="btn btn-danger btn-sm">Delete</a>
                        <form action="{{route('item.destroy',$item->id)}}" id="delete-item-{{$item->id}}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" >
                      </form>
                  </td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Picture</th>
                  <th>Items</th>
                  <th>Company Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Expiry Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            @else
                No data Found
                @endif
        </div>
    </div>
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