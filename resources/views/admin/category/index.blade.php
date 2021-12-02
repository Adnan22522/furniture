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
            <h1 class="m-0 text-dark">All Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Category</a></li>
              <li class="breadcrumb-item active">All Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="border-bottom"></div>
    <!-- /.content-header -->

    <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Categories</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($categories)>0)
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->created_at}}</td>
                  <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>|
                  <a href="javascript:;" onclick="confirmdelete('{{$category->id}}')" class="btn btn-danger btn-sm">Delete</a>
                  <form action="{{route('category.destroy',$category->id)}}" id="delete-item-{{$category->id}}" method="post" style="display: none;">
                      @csrf
                      @method('DELETE')
                    <input type="submit" name="submit" >
                    </form></td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Categories</th>
                  <th>Created At</th>
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