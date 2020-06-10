@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Yongcharoen
        <small>เพิ่มรายการสินค้า</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Yongcharoen</a></li>
        <li class="active">เพิ่มรายการสินค้า</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
 <form action="/add_product_yongcharoen/uploadFile" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
