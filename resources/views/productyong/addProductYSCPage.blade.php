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
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Main content -->
    <section class="content container-fluid">
  <!-- general form elements -->
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('productsYSC.store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label>รหัสสินค้า</label>
                  <input type="number" class="form-control"  name="product_code" placeholder="กรุณาใส่ รหัสสินค้า" value="{{ old('product_code') }}" required autofocus>
                </div>
                <div class="form-group">
                  <label >ชื่อสินค้า</label>
                  <input type="text" class="form-control" name="name" placeholder="กรุณาใส่ ชื่อสินค้า" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                  <label >ประเภทสินค้า</label>
                  <select class="form-control" name="type" required>
                    <option selected>เลือกประเภทสินค้า</option>
                    <option value="กีฬา,ดนตรี">กีฬา,ดนตรี</option>
                    <option value="เครื่องสำนักงาน">เครื่องสำนักงาน</option>
                    <option value="งานช่าง,งานศิลป์">งานช่าง,งานศิลป์</option>
                    <option value="พลาสติก,ถุงยาง,ลูกฟูก">พลาสติก,ถุงยาง,ลูกฟูก</option>
                    <option value="กระดาษ,สติ๊กเกอร์">กระดาษ,สติ๊กเกอร์</option>
                    <option value="เย็บปักถักร้อย">เย็บปักถักร้อย</option>
                    <option value="กาว,เทป,ตกแต่ง">กาว,เทป,ตกแต่ง</option>
                    <option value="ซอง,แฟ้ม,กระเป๋า,กล่อง,สัน">ซอง,แฟ้ม,กระเป๋า,กล่อง,สัน</option>
                    <option value="สมุด,บัญชี,วาดเขียน">สมุด,บัญชี,วาดเขียน</option>
                    <option value="หนังสือ,ดิกช์,สัญญา">หนังสือ,ดิกช์,สัญญา</option>
                    <option value="ปากกา,ดินสอ,เรขา">ปากกา,ดินสอ,เรขา</option>
                    <option value="ภาพศึกษา,ติดบอร์ด,รูปยาง">ภาพศึกษา,ติดบอร์ด,รูปยาง</option>
                    <option value="ยางลบ,บรรทัด,ลิคควิด">ยางลบ,บรรทัด,ลิคควิด</option>
                    <option value="ถ่าน,มีด,ใบมีด,ลวด,เข็ม">ถ่าน,มีด,ใบมีด,ลวด,เข็ม</option>
                    <option value="ไม้,กระดาน,กระจก">ไม้,กระดาน,กระจก</option>
                    <option value="สี,สอสี,สีน้ำ,หมึก,พู่กัน">สี,สอสี,สีน้ำ,หมึก,พู่กัน</option>
                    <option value="เชือก,สายรัด,ธง">เชือก,สายรัด,ธง</option>
                    <option value="ลูกเสือเนตรนารี,เข็มขัด">ลูกเสือเนตรนารี,เข็มขัด</option>
                    <option value="บรรทัด,ตลับเมตร">บรรทัด,ตลับเมตร</option>
                    <option value="กระเป๋า,ถุงผ้า">กระเป๋า,ถุงผ้า</option>
                    <option value="กิ๊ฟช็อฟ">กิ๊ฟช็อฟ</option>
                    <option value="ริบบิ้น,โบ,ไหมพรหม">ริบบิ้น,โบ,ไหมพรหม</option>
                    <option value="เครื่องสำอาง,ยา,เคมี">เครื่องสำอาง,ยา,เคมี</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >ราคาซื้อ</label>
                  <input type="number" class="form-control" name="purchase_price" placeholder="กรุณาใส่ ราคาซื้อ" value="{{ old('purchase_price') }}" required>
                </div>
                <div class="form-group">
                  <label >จำนวนที่มีอยู่</label>
                  <input type="number" class="form-control" name="available_amount" placeholder="กรุณาใส่ จำนวนที่มีอยู่" value="{{ old('available_amount') }}" required>
                </div>
                <div class="form-group">
                  <label >หน่วยซื้อ</label>
                  <select class="form-control" name="purchase_unit" required>
                    <option selected>เลือกหน่วยซื้อสินค้า</option>
                    <option value="ลูก">ลูก</option>
                    <option value="ตัว">ตัว</option>
                    <option value="เล่ม">เล่ม</option>
                    <option value="ฉบับ">ฉบับ</option>
                    <option value="กล่อง">กล่อง</option>
                    <option value="ถุง">ถุง</option>
                    <option value="ชิ้น">ชิ้น</option>
                    <option value="ขวด">ขวด</option>
                    <option value="ห่อ">ห่อ</option>
                    <option value="เส้น, สาย">เส้น, สาย</option>
                    <option value="ผืน">ผืน</option>
                    <option value="ธง">ธง</option>
                    <option value="แผ่น">แผ่น</option>
                    <option value="ม้วน">ม้วน</option>
                    <option value="แพ็ค">แพ็ค</option>
                    <option value="กระป๋อง">กระป๋อง</option>
                    <option value="อัน">อัน</option>
                    <option value="โหล">โหล</option>
                    <option value="ชุด">ชุด</option>
                    <option value="ลัง">ลัง</option>
                    <option value="หลอด">หลอด</option>
                    <option value="มัด">มัด</option>
                    <option value="คู่">คู่</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >บรรจุซื้อ</label>
                  <input type="text" class="form-control" name="packing_purchase" placeholder="กรุณาใส่ บรรจุซื้อ" value="{{ old('packing_purchase') }}" required>
                </div>
                <div class="form-group">
                  <label >ราคาปลีก</label>
                  <input type="number" class="form-control" name="retail_price" placeholder="กรุณาใส่ ราคาปลีก" value="{{ old('retail_price') }}" required>
                </div>
                <div class="form-group">
                  <label >หน่วยปลีก</label>
                  <select class="form-control" name="retail_unit" required>
                    <option selected>เลือกหน่วยปลีกสินค้า</option>
                    <option value="ลูก">ลูก</option>
                    <option value="ตัว">ตัว</option>
                    <option value="เล่ม">เล่ม</option>
                    <option value="ฉบับ">ฉบับ</option>
                    <option value="กล่อง">กล่อง</option>
                    <option value="ถุง">ถุง</option>
                    <option value="ชิ้น">ชิ้น</option>
                    <option value="ขวด">ขวด</option>
                    <option value="ห่อ">ห่อ</option>
                    <option value="เส้น, สาย">เส้น, สาย</option>
                    <option value="ผืน">ผืน</option>
                    <option value="ธง">ธง</option>
                    <option value="แผ่น">แผ่น</option>
                    <option value="ม้วน">ม้วน</option>
                    <option value="แพ็ค">แพ็ค</option>
                    <option value="กระป๋อง">กระป๋อง</option>
                    <option value="อัน">อัน</option>
                    <option value="โหล">โหล</option>
                    <option value="ชุด">ชุด</option>
                    <option value="ลัง">ลัง</option>
                    <option value="หลอด">หลอด</option>
                    <option value="มัด">มัด</option>
                    <option value="คู่">คู่</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >บรรจุปลีก</label>
                  <input type="text" class="form-control" name="retail_packing" placeholder="กรุณาใส่ บรรจุปลีก" value="{{ old('retail_packing') }}" required>
                </div>
                                
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
