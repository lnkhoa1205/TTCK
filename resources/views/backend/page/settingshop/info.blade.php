@extends('layouts.admin')
@section('content-header')
<style type="text/css">
	.back-ground:hover .btn-edit-background{
		background:#181414ad!important;
	}
	.avatar:hover .edit-avt{
		background:#181414ad!important;
	}
	
</style>
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hồ sơ shop</h1>
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
@endsection    
@section('content')
<div class="row">
	<div class="col-md-5">
		<div class="position-relative">
			<div class="back-ground" style="cursor: pointer;">
				@if($store->background == null)
				<img id="showbg" style="width: 100%;height: 250px;" src="{{asset('images/background-shop.jpg')}}">
				@else
				<img id="showbg" style="width: 100%;height: 250px;" src="{{asset('images/'.$store->background)}}">
				@endif
				<span class="position-absolute btn-edit-background" style="top:10px;right: 10px;background: #18141470;padding: 10px;color: #fff;border-radius: 25px;">Sửa ảnh bìa</span>
			</div>
			<div class="avatar position-absolute" style="bottom:-50px;left: 10px;cursor: pointer;">
				<div style="border-radius: 50%;overflow: hidden;" class="position-relative">
				@if($store->avt == null)
				<img id="showavt" style="width: 100px;height: 100px;border-radius: 50%;border: 2px solid grey" src="{{asset('images/shop-avatar.jpg')}}">	
				@else
				<img id="showavt" style="width: 100px;height: 100px;border-radius: 50%;border: 2px solid grey" src="{{asset('images/'.$store->avt)}}">	
				@endif
				<div class="edit-avt text-center position-absolute p-1" style="left: 0;bottom: 0;width: 100%;background: #18141470;color: #fff;" >
					Sửa
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-7 pl-5 pr-5">
		<form action="{{route('updateinfo',['id'=>$store->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<input type="file" class="form-control form-control-sm rounded-0 avt" name="avt" onchange="loadAvt(event)" hidden>
			<input type="file" class="form-control form-control-sm rounded-0 bg" name="background" onchange="loadBg(event)" hidden>
			
			<div class="form-group">
				<label>Tên shop</label>
				<input type="text" class="form-control form-control-sm rounded-0" name="name_shop" value="{{$store->name_shop}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" disabled class="form-control form-control-sm rounded-0" value="{{$store->email}}">
			</div>
			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="text" class="form-control form-control-sm rounded-0" name="phone" value="{{$store->phone}}">
			</div>
			<div class="form-group">
				<label>Mô tả</label>
				<input type="text" class="form-control rounded-0" name="description" placeholder="Nhập mô tả về cửa hàng của bạn" value="{{$store->description}}">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</div>
		</form>	
	</div>
	
</div>
@endsection
@section('js')
<script type="text/javascript">
	$("#image").on("change", function() {
    if ($("#image")[0].files.length > 5) {
    	$('.message-image').html('Chỉ chọn tối đa 5 ảnh');
        // alert("Chỉ chọn tối đa 5 ảnh");
        
    }else{

	    $("#myImg .col-6").remove();
	    if (this.files && this.files[0]) {

	      for (var i = 0; i < this.files.length; i++) {
	        var reader = new FileReader();
	        reader.onload = imageIsLoaded;
	        reader.readAsDataURL(this.files[i]);
	      }
	    }
	
    }
	});
	function imageIsLoaded(e) {
	  $('#myImg').append('<div class="col-6 p-2"><div class="bg-white"><img style="max-height:150px;" src=' + e.target.result + '></div></div>');
	};
	$('.back-ground').click(function(){
		$('.bg').click();
	});
	$('.avatar').click(function(){
		$('.avt').click();
	});
	var loadBg = function (event) {
      var outputImg = document.getElementById("showbg");
      outputImg.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadAvt = function (event) {
      var outputImg = document.getElementById("showavt");
      outputImg.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
@endsection
