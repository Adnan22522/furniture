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
            <h1 class="m-0 text-dark">All Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
    <div class="border-bottom"></div>
    <!-- /.content-header -->
    <div class="container">
    <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($users)>0)
                @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role->role}}</td>
                  <td><a href="{{url('admin/users/profile',$user->id)}}" class="btn btn-primary btn-sm">View Profile</a></td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>
</div>




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