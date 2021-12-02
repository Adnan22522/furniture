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

        <div class="col-md-10">
          <div class="col-md-2"></div>
        <div class="container">
          <div class="container">
        <div id="dvMain">
            <label id="lblNoOfRec" class="text-dark"> Enter value for create No of rows for Category </label>
            <div class="row">
            <input type="text" class="form-control col-sm-6 col-md-6" style="border-radius: 2px;" id="txtNoOfRec" />
            <input type="button" class="btn btn-primary" style="border-radius: 2px;" value="CREATE" onclick="load()" />
        </div>
      </div>
    </div>
  
  <form action="{{route('category.store')}}" method="post">
    @csrf
    <div id="AddControll">
          

    </div>
  </form>
  </div>
</div>

<script type="text/javascript">
  
// JavaScript source code

function load() {
    //alert("Working...");
    $("#txtNoOfRec").focus();

        $("#AddControll").empty();
        var NoOfRec = $("#txtNoOfRec").val();

        //alert("" + NoOfRec);

        if (NoOfRec > 0) {
            createControll(NoOfRec);
        }
}

function createControll(NoOfRec) {
    var tbl = "";

    tbl = "<table class='table table-bordered table-hover col-sm-6'>"+
                "<tr>"+
                    "<th style='width:20px'> S.No </th>"+
                    "<th> Categories </th>"+
                "</tr>";

    for (i = 1; i <= NoOfRec; i++) {
        tbl += "<tr>" +
                    "<td>" + i + "</td>" +

                    "<td>"+
                        "<input type='text' id='txtFName' name='category[]' class='form-control' placeholder='Category name' autofocus required/>"+
                    "</td>"+

                "</tr>";
    }
    tbl += "</table>"+
            "<input type='submit' id='txtFName' class='btn btn-primary' autofocus required/>";
            

    $("#AddControll").append(tbl);
} 

</script>

@endsection()