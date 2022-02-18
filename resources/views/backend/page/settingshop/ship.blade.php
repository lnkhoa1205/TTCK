@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cài đặt vận chuyển</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
              <li class="breadcrumb-item active">Danh sách</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection    
@section('content')

<div class="row p-2">
  
	<div class="col-12 bg-white p-1 d-flex justify-content-center p-3" style="min-height:66vh;">
  <div class="accordion"  style="width: 50%;" id="accordionExample">                 
    <form action="{{route('updateship',['id'=>$ship->id])}}" method="POST">
      @csrf
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Nhà bán đóng gói, sàn lấy và giao
          </button>
          <div class="float-right">
            <input type="checkbox" name="choose[]" value="1" 
              
              @if(in_array("1", explode(",",$ship->choose))) 
              checked 
              @endif
              >
          </div>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Kho của bạn, bạn sẽ phụ trách gói hàng, sàn sẽ đến lấy và giao cho khách hàng
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2>
     
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           Vận chuyển thông qua sàn
        </button>
        <div class="float-right">
        <input type="checkbox" checked disabled name="choose[]" value="2">
        <input type="checkbox" checked name="choose[]" value="2" hidden>
        </div>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            Sản phẩm bạn gửi ở kho của sàn, sàn sẽ tự đóng gói và giao cho khách hàng
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Tự vận hành
          </button>
          <div class="float-right">
            <input type="checkbox" name="choose[]" value="3" 
            @if(in_array("3", explode(",",$ship->choose))) 
              checked 
              @endif
            >
          </div>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          Bạn sẽ tự gói hàng, và giao trực tiếp cho khách, sàn chỉ tiếp nhận khiếu nại
        </div>
      </div>
    </div>
    <div class="card">
      <button class="btn btn-success">Cập nhật</button>
    </div>
    </form>  
  </div>
	</div>
</div>	
@endsection