@extends('layouts.admin')
@section('content-header')

<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tạo sản phẩm</h1>
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
<div class="row add-container">
	
	<div class="col-3">
		<div id="list-card" class="list-group sticky-top" style="top:20px;">
		  <a class="list-group-item list-group-item-action open-card-1"  href="#scroll-to">1. Thông tin chung</a>
		  <a class="list-group-item list-group-item-action open-card-2" href="#card-1">2. Mô tả sản phẩm</a>
		  <a class="list-group-item list-group-item-action open-card-3" href="#card-2">3. Vận hành và các lựa chọn</a>
		  <a class="list-group-item list-group-item-action open-card-4" href="#card-3">4. Hình ảnh sản phẩm</a>
		</div>
	</div>
	<div class="col-9">	
		<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<div class="card card-default" id="card-1">
				<div class="card-header c-1 bg-primary" style="cursor: pointer;">
		            <h3 class="card-title"><strong>1. Thông tin chung</strong></h3>
		        </div>
		        <div class="card-body cb-1">
		        	<div class="form-group">
		        		<label><span class="text-danger">* </span> Tên sản phẩm</label>
		        		<input type="text" name="name_product" class="form-control rounded-0  form-control-sm">
		        	</div>
		        	<div class="form-group">
				        <label>Thuộc danh mục</label>
				        <select class="form-control form-control-sm rounded-0 select2" name="category_id">
				          @foreach($categories as $category)
				          
				          <option @if($category->parent_id == 0)style="font-weight:bold;"@endif value="{{$category->id}}">
				            @php 
				            $str = '';
				            for($i = 0;$i < $category->level;$i++)
				            {
				              echo $str;
				              $str .='-- ';
				            }
				            @endphp
				            
				            {{$category->name_category}}
				            
				          </option>
				          @endforeach
				        </select>
				      </div>
		        	<div class="form-group row">
		        		<div class="col-6">
		        			<label>Thương hiệu</label>
		        			<input type="text" name="trademark" class="form-control rounded-0  form-control-sm">
		        		</div>
		        		<div class="col-6">
		        			<label>Xuất xứ</label>
		        			<select name="origin" class="form-control rounded-0  form-control-sm select2">
		        				<option>Việt nam</option>
		        			</select>	
		        		</div>
		        	</div>
		        	{{-- <div class="form-group row">
		        		<div class="col-6">
		        			<label>Kiểu dáng</label>
		        			<input type="text" name="" class="form-control rounded-0  form-control-sm">
		        		</div>
		        		<div class="col-6">
		        			<label>Quà tặng kèm</label>
		        			<input type="text" name="" class="form-control rounded-0  form-control-sm">
		        		</div>
		        	</div> --}}	
		        </div>
			</div>
			<div class="card card-default"  id="card-2">
				<div class="card-header c-2" style="cursor: pointer;">
		            <h3 class="card-title"><strong>2. Mô tả sản phẩm</strong> </h3>
		        </div>
		        <div class="card-body cb-2" style="display: none;">
		        	<div class="form-group">
	                    <label for="exampleInputFile">Video giới thiệu sản phẩm</label>
	                    <input type="file" class="form-control rounded-0  form-control-sm" name="video" style="height:auto;">
                  	</div>
                  	<div class="form-group">
                  		<label><span class="text-danger">* </span> Mô tả chi tiết sản phẩm 
                  			<span data-toggle="tooltip" data-placement="top" title="Mô tả về thiết kế, tính năng, đặc điểm của sản phẩm càng đầy đủ, càng chi tiết sẽ giúp khách hàng dễ dàng tham khảo và chọn mua">
						  	<i class="fas fa-exclamation-circle"></i>
							</span>
						</label>
                  		<textarea name="description" class="summernote" rows="">
                  			
                  		</textarea>
                  	</div>
                  	<div class="form-group mt-5">
                  		<label>Kích thước sản phẩm 
                 		<span data-toggle="tooltip" data-placement="top" title="Mô tả về thiết kế, tính năng, đặc điểm của sản phẩm càng đầy đủ, càng chi tiết sẽ giúp khách hàng dễ dàng tham khảo và chọn mua">
						  	<i class="fas fa-exclamation-circle"></i>
							</span>
						</label>

                  		<textarea name="size_product" class="summernote" rows="">
                  			
                  		</textarea>
                  	</div>
		        </div>
			</div>
			<div class="card card-default" id="card-3">
				<div class="card-header c-3" style="cursor: pointer;">
		            <h3 class="card-title"><strong>3. Vận hành và các lựa chọn</strong></h3>

		        </div>
		        <div class="card-body cb-3" style="display: none;">
		        	<h5 class="text-secondary">Thông tin vận hành</h5>
		        	<div class="form-group row">
		        		<div class="col-6">
	                    <label>Mô hình vận hành</label>
	                    <select name="ship" class="form-control rounded-0 form-control-sm choose-mohinh">
	                    	<option selected disabled>Chọn</option>
	                    	{{-- <option value="1">Nhà bán tự đóng gói, Sàn lấy và giao</option> --}}
	                    	{{-- <option value="2">Kho của sàn thương mại</option> --}}
	                    	@if(in_array("1",explode(",",$ship->choose)))
	                    	<option value="1">Nhà bán đóng gói, sàn lấy và giao</option>
	                    	@endif
	                    	@if(in_array("2",explode(",",$ship->choose)))
	                    	<option value="2">Kho của sàn thương mại</option>
	                    	@endif
	                    	@if(in_array("3",explode(",",$ship->choose)))
	                    	<option value="3">Nhà bán tự vận hành, sàn chỉ tiếp nhận khiếu nại</option>
	                    	@endif
	                    	{{-- <option value="2">Kho của sàn thương mại</option> --}}
	                    	
	                    </select>
	                    </div>
                  	</div>
                  	<div class="form-group row mohinh" style="display: none;">
                  		<div class="col-6">
	                    	<label><span class="text-danger">* </span>Kho chứa hàng</label>
	                    	{{-- <input name="warehouse_id" type="text" class="form-control rounded-0  form-control-sm"> --}}
	                    	<select name="warehouse_id" class="form-control rounded-0  form-control-sm">
	                    		@foreach($warehouses as $warehouse)
	                    		<option value="{{$warehouse->id}}">
	                    			@php
							            	$name_city = DB::table('devvn_tinhthanhpho')->select('name')->where('matp',$warehouse->city)->first();
							            	$name_district = DB::table('devvn_quanhuyen')->select('name')->where('id',$warehouse->district)->first();
							            	$name_wards = DB::table('devvn_xaphuongthitran')->select('name')->where('id',$warehouse->wards)->first();
							            	
							            	 @endphp
							            	{{$name_city->name}}, {{$name_district->name}}, {{$name_wards->name}}
	                    			
	                    		</option>
	                    		@endforeach
	                    	</select>
	                    </div>
	                    <div class="col-6">
	                    	<label><span class="text-danger">* </span> Số lượng tồn</label>
	                    	<input type="number" class="form-control rounded-0  form-control-sm" name="quantity">
	                    </div>
                  	</div>
                  	<h5 class="text-secondary">Các lựa chọn sản phẩm</h5>
                  	<div class="form-group clearfix row">
                  	<div class="col-6 border border-gray-300" style="padding: 5px;">
                      <div class="icheck-success d-inline mr-3">
                        <input type="radio" class="radio-choose" name="choose" checked id="radioSuccess1" value="1">
                        <label for="radioSuccess1">
                        	Sản phẩm không có lựa chọn
                        </label>
                      </div>
                      </div>
                      <div class="col-6 border border-gray-300" style="padding: 5px;">
                      <div class="icheck-success d-inline">
                        <input type="radio" class="radio-choose" name="choose" id="radioSuccess2" value="2">
                        <label for="radioSuccess2">
                        	Sản phẩm có nhiều lựa chọn
                        </label>
                      </div>
                      </div>
                    </div>
                    <div id="one-choose">
	                    <div class="form-group row">
	                    	<div class="col-6">
	                    		<label>Giá bán</label>
	                    		<input type="number" name="price" class="form-control rounded-0  form-control-sm">
	                    	</div>
	                    	<div class="col-6">
	                    		<label>Mã sản phẩm</label>
	                    		<input type="text" name="product_code" class="form-control rounded-0  form-control-sm">
	                    	</div>
	                    </div>
	                </div>    
                    <div id="multi-choose" style="display: none;">
                    	<label>Chọn 1-2 lựa chọn cho sản phẩm</label>
                    	<div class="form-group row border border-gray-300 p-3" id="show-choose">
              		@foreach($selects as $select)
              		<div class="col-6">
                		<label>
                			<div class="form-check">
									  <input class="form-check-input check_choose" type="checkbox" value="select_id_{{$select->id}}" id="check-choose-{{$select->id}}" value="{{$select->id}}" data-name="{{$select->name_select}}">
									  <label class="form-check-label" for="check-choose-{{$select->id}}">
									   {{$select->name_select}}
									  </label>
									</div>
								</label>
								<select class="select2bs4  form-control form-control-sm" multiple="multiple" data-id-save="{{$select->id}}" disabled="disabled" id="select_id_{{$select->id}}" style="width: 100%;">
									@foreach($select->option as $option)
									<option value="{{$option->id}}">{{$option->name_option}}</option>
									@endforeach
								</select>
			                </div>
			                @endforeach
                    	</div>
                    	<div class="form-group">
                    		<div class="table-responsive">
                    			<table class="table table-bordered">
                    			  {{-- <caption>Danh sách các lựa chọn</caption> --}}
                    			  <thead class="">
                    			    <tr class="show-thead text-center">

                    			     {{--  <th scope="col">Màu sắc</th>
                    			      <th scope="col">Kích cỡ</th> --}}
                    			      <th scope="col">Tồn kho</th>
                    			      <th scope="col">Giá bán</th>
                    			      <th scope="col">Mã sản phẩm</th>
                    			    </tr>
                    			  </thead>
                    			  <tbody class="insert-row text-center">
                    			    
                    			  </tbody>
                    			</table>
                    		</div>
                    	</div>
                    	<div class="forrm-group img-frm row mb-2">
                    		
                    	</div>
                    </div>
                    <div class="form-group clearfix row  border-top border-gray-300">
                    	<div class="col-6">
                    		<label>Bảo hành sản phẩm 
                    			<span data-toggle="tooltip" data-placement="top" title="Chọn 1 trong 2">
							  	<i class="fas fa-exclamation-circle"></i>
								</span>
                    		</label>
                    		<br>
							<div class="icheck-success d-inline mr-3">
								<input type="radio" class="rad-bh" name="guarantee" checked id="radioSuccess3" value="1">
								<label for="radioSuccess3">
									Có
								</label>
							</div>
							<div class="icheck-success d-inline">
								<input type="radio" class="rad-bh" name="guarantee" id="radioSuccess4" value="2">
								<label for="radioSuccess4">
									Không
								</label>
							</div>
						</div>

						<div class="col-6" >
							<label>Hình thức bảo hành</label>
							<select name="warranty_form" class="form-control rounded-0  form-control-sm bh">
								<option value="1">Phiếu bảo hành</option>
								<option value="2">Điện tử</option>
							</select> 	
						</div>
						<div class="col-6">
                			<label>Thời gian bảo hành</label>
                			<div class="custom-control custom-radio">
	                          <input value="full" class="custom-control-input bh" type="radio" id="customRadio1" name="time_guar">
	                          <label for="customRadio1" class="custom-control-label">Trọn đời</label>
	                        </div>
	                        <div class="custom-control custom-radio">
	                          <input class="custom-control-input bh" type="radio" id="customRadio2" name="customRadio">
	                          <label for="customRadio2" class="custom-control-label">
	                          	<div>
	                          	<input class="bh" style="width: 50%;" type="number" name="time_guar">
	                          	<select name="op_time_guar" class="bh" style="padding: 3px;border-color: grey;">
	                          		<option value="ngày">Ngày</option>
	                          		<option value="tháng">Tháng</option>
	                          		<option value="năm">Năm</option>
	                          	</select>
	                          </div>
	                          </label>
	                        </div>    
                		</div>
                		<div class="col-6 bh">
                			<label>Loại bảo hành</label>
                			<select name="type_guar" class="form-control rounded-0  form-control-sm bh">
                				<option value="1">Bảo hành thông qua sàn</option>
                				<option value="2">Bảo hành chính hãng</option>
                			</select>
                		</div>
                    </div>
		        </div>
			</div>
			<div class="card card-default" id="card-4">
				<div class="card-header c-4" style="cursor: pointer;">
		            <h3 class="card-title"><strong>4. Hình ảnh sản phẩm </strong></h3>

		        </div>
		        <div class="card-body cb-4" style="display:none;">
	        	<div class="form-group ">
	        		<label>Ảnh đại diện cho sản phẩm</label>
	        		<input type="file" name="image_main">
	        	</div>
	        	<div class="form-group col-6">
	        		<label>Chọn ảnh sản phẩm<span data-toggle="tooltip" data-placement="top" title="Chọn ảnh cho sản phẩm, ảnh đầu tiên sẽ là ảnh đại diện cho sản phẩm của bạn">
				  	<i class="fas fa-exclamation-circle"></i>
					</span></label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="choose-img" multiple style="cursor: pointer;" name="image_slide[]">
                        <label class="custom-file-label" for="choose-img">Nhấn vào đây hoặc kéo ảnh vào đây</label>
                      </div>
                </div>
	        	<div id="myImg" class="mt-2 row">
	        		
	        	</div>
		        </div>
			</div>
			<div class="row p-3">
				<div class="col-12 p-3 bg-white text-right fixed-bottom" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
					<button class="btn btn-danger btn-sm">Hủy</button>
					<button class="btn btn-outline-primary btn-sm ml-3 mr-3">Lưu nháp</button>
					<button type="submit" class="btn btn-primary btn-sm">Tạo và bật bán</button>
				</div>
			</div>
		</form>	
	</div>
</div>

@endsection
@section('js')
<script type="text/javascript">
    $('.select2').select2();
      
    $(function() {
	  $("#choose-img").change(function() {
	    $("#myImg .col-2").remove();
	    if (this.files && this.files[0]) {

	      for (var i = 0; i < this.files.length; i++) {
	        var reader = new FileReader();
	        reader.onload = imageIsLoaded;
	        reader.readAsDataURL(this.files[i]);
	      }
	    }
	  });
	});

	function imageIsLoaded(e) {
	  $('#myImg').append('<div class="col-2 mt-1"><img style="width:100%;" src=' + e.target.result + '></div>');
	};
    $('.radio-choose').on('click',function(){
    	var val = $(this).val();
    	if(val == 1)
    	{
    		$('#multi-choose').css('display','none');
    		$('#one-choose').css('display','block');
    	}
    	else
    	{
    		$('#multi-choose').css('display','block');
    		$('#one-choose').css('display','none');
    	}
    });
    $('.check_choose').on('click',function(){
    	var count_check = $('.check_choose:checked').length;
    	var id = $(this).val();
    	var get_name = $(this).attr('data-name');
    	var id_check = $(".check_choose:checked").map(function () {return this.value;}).get().join(",");
			let arr_id = id_check.split(',');
			var thead = '';
    	if (count_check ==1 && $(this).is(":checked")) {
        	$('#'+id+'').prop('disabled', false);
        	
      		thead +='<th class="th-'+id+'" data-id="'+id+'">'+get_name+'</th>';	
      		$('.show-thead').prepend(thead);
        	$('.insert-row tr').remove();
        	$('.img-frm .col-12').remove();
	    }
	    else if(count_check ==2 && $(this).is(":checked"))
	    {
	    	$('#'+id+'').prop('disabled', false);
      		thead +='<th class="th-'+id+'" data-id="'+id+'">'+get_name+'</th>';	
      		$('.show-thead th:nth-child(1)').after(thead);
        	$('.insert-row tr').remove();
	    }
	    else if(count_check >2 )
	    {
	    	Toast.fire({
		        icon: 'error',
		        title: 'Chỉ được chọn tối đa 2 lựa chọn'
		    });
	    	$(this).prop('checked', false);
	    }

	    else {
	        $('#'+id+'').prop('disabled', 'disabled');
	        $('.th-'+id+'').remove();     
	        $('.insert-row').html("");
	        $('#'+id+'').val(null).trigger("change");

	    }
	    
    });

    //Xử lí có không bảo hành
$('.rad-bh').click(function(){
	if($(this).val() == 1)
	{
		$('.bh').prop('disabled',false);
	}
	else
	{
		$('.bh').prop('disabled','disabled');
	}
});
//xử lí hiện select2
$('.select2bs4').select2({theme: 'bootstrap4'}).on('select2:open', function () {
    var a = $(this).data('select2');
    var id = $(this).data('select2-id');
    var id_ajax = $(this).data('id-save');

    var url = '{{route('option.store')}}';
    if (!$('.select2-link').length) {
        a.$results.parents('.select2-results')
                .append('<div style="padding: 6px 12px;" class="select2-link"><a style="cursor:pointer;" class="new-item">Thêm mới <i class="fas fa-plus"></i></a></div>')
                .on('click', function() {
                    
                    var newval = prompt("Lựa chọn mới: ");
                    if(newval !== null) {
                        if ($('#'+id+'').find("option[value='" + newval + "']").length) {
                            $('#'+id+'').val(newval).trigger("change");
                        } else { 
                          
                          // var newState = new Option(newval, newval, true, true);
                          // $('#'+id+'').append(newState).trigger('change');

                          // xử lí ajax
                          $.ajax({

			                    type: 'post',
			                    url: url,
			                    data: {
			                        'name_option': newval,
			                        'id': id_ajax
			                    },
			                    success:function(data){
			                    	var option = new Option(data.name_option, data.id, true, true);
			                    	$('#'+id+'').append(option).trigger('change');
			                    	// console.log(data);
			                    }
			                });

                        }
                        a.trigger('close'); 
                    }  
                });

				 }
});
$('.select2bs4').change(function(){
	var count_check = $('.check_choose:checked').length;
	// var id_check = $(".check_choose:checked").map(function () {return this.value;}).get().join(",");
	// let arr_id = id_check.split(',');
	

	// for (var d = 0;d<arr_id.length;d++) {
	// 		if(d == 0)
	// 		{
	// 			var giatri = $('#'+arr_id[d]+'').select2('data');
	// 		}
	// 		else
	// 		{

	// 			var giatri2 = $('#'+arr_id[d]+'').select2('data');
	// 		}
	// }

	var output = '';
	var img_frm = '';
	var id = $('.show-thead th:nth-child(1)').attr('data-id');
	var giatri = $('#'+id+'').select2('data');
	var id2 = $('.show-thead th:nth-child(2)').attr('data-id');
	var giatri2 = $('#'+id2+'').select2('data');
	console.log(giatri);
	if(count_check == 1)
	{
		
		// var giatri = $('#'+id_check+'').val();
		for(var i=0;i<giatri.length;i++)
		{
	    output +='<tr><td>'+giatri[i].text+'<input name="option_id[]" type="hidden" class="form-control form-control-sm rounded-0 " value="'+giatri[i].id+'"></td>';
			output +='<td><input min="0" type="number" class="form-control form-control-sm rounded-0 " name="quantities[]"></td>';
			output +='<td><input min="0" type="number" class="form-control form-control-sm rounded-0 " name="prices[]"></td>';
			output +='<td><input type="text" class="form-control form-control-sm rounded-0 " name="product_codes[]"></td>';
		output +='</tr>';
			img_frm +='<div class="col-12">';
			img_frm +='<label><span class="text-danger">*</span>Ảnh đại diện lựa chọn : '+giatri[i].text+'</label>';
			img_frm +='<input type="file" style="height:auto;" class="form-control form-control-sm rounded-0" name="image_choose[]">';
  		img_frm +='</div>';
		}
		// $('.insert-row').html(output);
	}

	else if(count_check==2)
	{
		
		for(var i=0;i<giatri.length;i++)
			for (var j = 0; j <giatri2.length; j++)
			{
				if(giatri[i] != null)
				{
		    	output +='<tr><td>'+giatri[i].text+'<input name="option_id[]" type="hidden" class="form-control form-control-sm rounded-0 " value="'+giatri[i].id+','+giatri2[j].id+'"></td>';
		    	}
				else
				{
					output +='<tr><td></td>';
				}
				if(giatri2[j] != null)
				{
					output +='<td>'+giatri2[j].text+'</td>';
				}
				else
				{
					output +='<td></td>';	
				}
				output +='<td><input min="0" type="number" class="form-control form-control-sm rounded-0 " name="quantities[]"></td>';
				output +='<td><input min="0" type="number" class="form-control form-control-sm rounded-0 " name="prices[]"></td>';
				output +='<td><input type="text" class="form-control form-control-sm rounded-0 " name="product_codes[]"></td>';
				output +='</tr>';
				img_frm +='<div class="col-12">';
				img_frm +='<label><span class="text-danger">*</span>Ảnh đại diện lựa chọn : '+giatri[i].text+' X '+giatri2[j].text+'</label>';
				img_frm +='<input type="file" style="height:auto;" class="form-control form-control-sm rounded-0" name="image_choose[]">';
	  		img_frm +='</div>';
			}
		
	}
	else
	{
		output = '';
	}
	$('.insert-row').html(output);
	$('.img-frm').html(img_frm);		
});

    //xử lí tooltip
    $(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip()
	});


	$('.c-1').click(function(){
		$('.cb-1').slideToggle(300);
		$(this).toggleClass("bg-primary");
	});
	$('.c-2').click(function(){
		$('.cb-2').slideToggle(300);
		$(this).toggleClass("bg-primary");
	});
	$('.c-3').click(function(){
		$('.cb-3').slideToggle(300);
		$(this).toggleClass("bg-primary");
	});
	$('.c-4').click(function(){
		$('.cb-4').slideToggle(300);
		$(this).toggleClass("bg-primary");
	});
	$('.open-card-1').on('click',function(){
		$('.cb-1').slideDown(300);
		$('.cb-2').slideUp();
		$('.cb-3').slideUp();
		$('.cb-4').slideUp();
		$('.c-1').addClass("bg-primary");
		$('.c-2').removeClass("bg-primary");
		$('.c-3').removeClass("bg-primary");
		$('.c-4').removeClass("bg-primary");
	});
	$('.open-card-2').on('click',function(){
		$('.cb-2').slideDown(300);
		$('.cb-1').slideUp();
		$('.cb-3').slideUp();
		$('.cb-4').slideUp();
		$('.c-2').addClass("bg-primary");
		$('.c-1').removeClass("bg-primary");
		$('.c-3').removeClass("bg-primary");
		$('.c-4').removeClass("bg-primary");
	});
	$('.open-card-3').on('click',function(){
		$('.cb-3').slideDown(300);
		$('.cb-2').slideUp();
		$('.cb-1').slideUp();
		$('.cb-4').slideUp();
		$('.c-3').addClass("bg-primary");
		$('.c-2').removeClass("bg-primary");
		$('.c-1').removeClass("bg-primary");
		$('.c-4').removeClass("bg-primary");
	});
	$('.open-card-4').on('click',function(){
		$('.cb-4').slideDown(300);
		$('.cb-2').slideUp();
		$('.cb-1').slideUp();
		$('.cb-3').slideUp();
		$('.c-4').addClass("bg-primary");
		$('.c-2').removeClass("bg-primary");
		$('.c-1').removeClass("bg-primary");
		$('.c-3').removeClass("bg-primary");
	});
	$('.choose-mohinh').change(function(){

		if($(this).val() == 1)
		{
			$('.mohinh').slideDown(200);
		}
		if($(this).val() == 2)
		{
			$('.mohinh').slideUp(200);
		}
	});
  $('.select2-selection,.select2-selection--single').css({"border-radius":"0px","border":"1px solid #aaaaaa85"})
	$('.select2-container').children().css({"border-radius":"0px","border":"none"})  

</script>
@endsection