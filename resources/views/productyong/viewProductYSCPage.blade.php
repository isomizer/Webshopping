@extends('layouts.dashboard')

@section('stylesheet')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('dashboardVie/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection



@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Yongcharoen
        <small>รายการสินค้า</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Yongcharoen</a></li>
        <li class="active">รายการสินค้า</li>
      </ol>
    </section>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <!-- Main content -->
   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>รหัสสินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th>ประเภทสินค้า</th>
                  <th>ราคาซื้อ</th>
                  <th>จำนวนที่มีอยู่</th>
                  <th>หน่วยซื้อ</th>
                  <th>บรรจุซื้อ</th>
                  <th>ราคาปลีก</th>
                  <th>หน่วยปลีก</th>
                  <th>บรรจุปลีก</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product) 
                <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->product_code }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->type }}</td>
                  <td>{{ $product->purchase_price }}</td>
                  <td>{{ $product->available_amount }}</td>
                  <td>{{ $product->purchase_unit }}</td>
                  <td>{{ $product->packing_purchase }}</td>
                  <td>{{ $product->retail_price }}</td>
                  <td>{{ $product->retail_unit }}</td>
                  <td>{{ $product->retail_packing }}</td>
                  <td>
                <form action="{{ route('productsYSC.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('productsYSC.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('productsYSC.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
                </tr>
                   
                @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>รหัสสินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th>ประเภทสินค้า</th>
                  <th>ราคาซื้อ</th>
                  <th>จำนวนที่มีอยู่</th>
                  <th>หน่วยซื้อ</th>
                  <th>บรรจุซื้อ</th>
                  <th>ราคาปลีก</th>
                  <th>หน่วยปลีก</th>
                  <th>บรรจุปลีก</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('scripts')
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dashboardVie/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('dashboardVie/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboardVie/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('dashboardVie/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('dashboardVie/bower_components/fastclick/lib/fastclick.js') }}"></script>
 
 <!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
