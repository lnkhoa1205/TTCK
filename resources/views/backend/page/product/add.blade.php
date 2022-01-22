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
		  <a class="list-group-item list-group-item-action" href="">Tài liệu</a>
		</div>
	</div>
	<div class="col-9">	
			<div class="card card-default" id="card-1">
				<div class="card-header c-1 bg-primary" style="cursor: pointer;">
		            <h3 class="card-title"><strong>1. Thông tin chung</strong></h3>
		        </div>
		        <div class="card-body cb-1">
		        	<div class="form-group">
		        		<label><span class="text-danger">* </span> Tên sản phẩm</label>
		        		<input type="text" name="" class="form-control form-control-sm">
		        	</div>
		        	<div class="form-group">
		        		<label><span class="text-danger">* </span> Danh mục</label>
		        		<input type="text" name="" class="form-control form-control-sm">
		        	</div>
		        	<div class="form-group row">
		        		<div class="col-6">
		        			<label><span class="text-danger">* </span> Thương hiệu</label>
		        			<input type="text" name="" class="form-control form-control-sm">
		        		</div>
		        		<div class="col-6">
		        			<label><span class="text-danger">* </span> Xuất xứ</label>
		        			<input type="text" name="" class="form-control form-control-sm">
		        		</div>
		        	</div>
		        	<div class="form-group row">
		        		<div class="col-6">
		        			<label><span class="text-danger">* </span> Kiểu dáng</label>
		        			<input type="text" name="" class="form-control form-control-sm">
		        		</div>
		        		<div class="col-6">
		        			<label><span class="text-danger">* </span> Quà tặng kèm</label>
		        			<input type="text" name="" class="form-control form-control-sm">
		        		</div>
		        	</div>	
		        </div>
			</div>
			<div class="card card-default"  id="card-2">
				<div class="card-header c-2" style="cursor: pointer;">
		            <h3 class="card-title"><strong>2. Mô tả sản phẩm</strong> </h3>
		        </div>
		        <div class="card-body cb-2" style="display: none;">
		        	<div class="form-group">
	                    <label for="exampleInputFile">Video giới thiệu sản phẩm</label>
	                    <input type="file" class="form-control form-control-sm" name="" style="height:auto;">
                  	</div>
                  	<div class="form-group">
                  		<label><span class="text-danger">* </span> Mô tả chi tiết sản phẩm 
                  			<span data-toggle="tooltip" data-placement="top" title="Mô tả về thiết kế, tính năng, đặc điểm của sản phẩm càng đầy đủ, càng chi tiết sẽ giúp khách hàng dễ dàng tham khảo và chọn mua">
						  	<i class="fas fa-exclamation-circle"></i>
							</span>
						</label>
                  		<textarea class="summernote" rows="">
                  			
                  		</textarea>
                  	</div>
                  	<div class="form-group mt-5">
                  		<label>Kích thước sản phẩm 
                 		<span data-toggle="tooltip" data-placement="top" title="Mô tả về thiết kế, tính năng, đặc điểm của sản phẩm càng đầy đủ, càng chi tiết sẽ giúp khách hàng dễ dàng tham khảo và chọn mua">
						  	<i class="fas fa-exclamation-circle"></i>
							</span>
						</label>

                  		<textarea class="summernote" rows="">
                  			
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
	                    <select class="form-control form-control-sm">
	                    	<option>Chọn</option>
	                    	<option>Nhà bán tự đóng gói, Sàn lấy và giao</option>
	                    	<option>Kho của sàn thương mại</option>
	                    </select>
	                    </div>
                  	</div>
                  	<div class="form-group row">
                  		<div class="col-6">
	                    	<label><span class="text-danger">* </span>Kho chứa hàng</label>
	                    	<input type="text" class="form-control form-control-sm" name="">
	                    </div>
	                    <div class="col-6">
	                    	<label><span class="text-danger">* </span> Số lượng tồn</label>
	                    	<input type="number" class="form-control form-control-sm" name="">
	                    </div>
                  	</div>
                  	<h5 class="text-secondary">Các lựa chọn sản phẩm</h5>
                  	<div class="form-group clearfix row">
                  	<div class="col-6">
                      <div class="icheck-success d-inline mr-3">
                        <input type="radio" class="radio-choose" name="r3" checked id="radioSuccess1" value="1">
                        <label for="radioSuccess1">
                        	Sản phẩm không có lựa chọn
                        </label>
                      </div>
                      </div>
                      <div class="col-6">
                      <div class="icheck-success d-inline">
                        <input type="radio" class="radio-choose" name="r3" id="radioSuccess2" value="2">
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
	                    		<input type="number" name="" class="form-control form-control-sm">
	                    	</div>
	                    	<div class="col-6">
	                    		<label>Mã sản phẩm</label>
	                    		<input type="text" name="" class="form-control form-control-sm">
	                    	</div>
	                    </div>
	                </div>    
                    <div id="multi-choose" style="display: none;">
                    	<label>Chọn 1-2 lựa chọn cho sản phẩm</label>
                    	<div class="form-group row border border-gray-300 p-3" id="show-choose">
                    		
                    		<div class="col-6">
	                    		<label>
	                    			<div class="form-check">
									  <input class="form-check-input check_choose" type="checkbox" value="select_id_3" id="check-choose-1" value="mau" data-name="Màu sắc">
									  <label class="form-check-label" for="check-choose-1">
									    Màu sắc
									  </label>
									</div>
								</label>
								<select class="select2bs4  form-control form-control-sm" multiple="multiple" disabled="disabled" id="select_id_3" style="width: 100%;">
									<option>Đỏ</option>
									<option>Cam</option>
									<option>Vàng</option>
									<option>Lục</option>
									<option>Lam</option>
									<option>Chàm</option>
									<option>Tím</option>
								</select>
			                </div>
			                <div class="col-6">
	                    		<label>
	                    			<div class="form-check">
									  <input class="form-check-input check_choose" type="checkbox" id="check-choose-2" value="select_id_1" data-name="Kích cỡ">
									  <label class="form-check-label" for="check-choose-2">
									    Kích cỡ
									  </label>
									</div>
								</label>
								<select class="select2bs4 form-control form-control-sm" multiple="multiple" disabled="disabled" id="select_id_1" style="width: 100%;">
									<option>S</option>
									<option>M</option>
									<option>XL</option>
									<option>XXL</option>
									<option>XXL</option>
									<option>30</option>
									<option>Washington</option>
								</select>
			                </div>
			                <div class="col-6">
	                    		<label>
	                    			<div class="form-check">
									  <input class="form-check-input check_choose" type="checkbox" id="check-choose-3" value="select_id_2" data-name="Phiên bản">
									  <label class="form-check-label" for="check-choose-3">
									    Phiên bản
									  </label>
									</div>
								</label>
								<select id="select_id_2" class="select2bs4  form-control form-control-sm" disabled="disabled" multiple="multiple" style="width: 100%;">
									<option>Alabama</option>
									<option>Alaska</option>
									<option>California</option>
									<option>Delaware</option>
									<option>Tennessee</option>
									<option>Texas</option>
									<option>Washington</option>
								</select>
			                </div>
                    	</div>
                    	<div class="form-group">
                    		<div class="table-responsive">
                    			<table class="table table-bordered">
                    			  <caption>Danh sách các lựa chọn</caption>
                    			  <thead class="">
                    			    <tr class="show-thead">

                    			     {{--  <th scope="col">Màu sắc</th>
                    			      <th scope="col">Kích cỡ</th> --}}
                    			      <th scope="col">Tồn kho</th>
                    			      <th scope="col">Giá bán</th>
                    			      <th scope="col">Mã sản phẩm</th>
                    			    </tr>
                    			  </thead>
                    			  <tbody class="insert-row">
                    			    
                    			  </tbody>
                    			</table>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group clearfix row  border-top border-secondary pt-2">
                    	<div class="col-6">
                    		<label>Bảo hành sản phẩm 
                    			<span data-toggle="tooltip" data-placement="top" title="Chọn 1 trong 2">
							  	<i class="fas fa-exclamation-circle"></i>
								</span>
                    		</label>
                    		<br>
							<div class="icheck-success d-inline mr-3">
								<input type="radio" class="rad-bh" name="baohanh" checked id="radioSuccess3" value="1">
								<label for="radioSuccess3">
									Có
								</label>
							</div>
							<div class="icheck-success d-inline">
								<input type="radio" class="rad-bh" name="baohanh" id="radioSuccess4" value="2">
								<label for="radioSuccess4">
									Không
								</label>
							</div>
						</div>

						<div class="col-6" >
							<label>Hình thức bảo hành</label>
							<select name="" class="form-control form-control-sm bh">
								<option>Phiếu bảo hành</option>
								<option>Điện tử</option>
							</select> 	
						</div>
						<div class="col-6">
                			<label>Thời gian bảo hành</label>
                			<div class="custom-control custom-radio">
	                          <input class="custom-control-input bh" type="radio" id="customRadio1" name="customRadio">
	                          <label for="customRadio1" class="custom-control-label">Trọn đời</label>
	                        </div>
	                        <div class="custom-control custom-radio">
	                          <input class="custom-control-input bh" type="radio" id="customRadio2" name="customRadio">
	                          <label for="customRadio2" class="custom-control-label">
	                          	<div>
	                          	<input class="bh" style="width: 50%;" type="number" name="">
	                          	<select class="bh" style="padding: 3px;border-color: grey;">
	                          		<option>Ngày</option>
	                          		<option>Tháng</option>
	                          		<option>Năm</option>
	                          	</select>
	                          </div>
	                          </label>
	                        </div>    
                		</div>
                		<div class="col-6 bh">
                			<label>Loại bảo hành</label>
                			<select class="form-control form-control-sm bh">
                				<option>Bảo hành thông qua sàn</option>
                				<option>Bảo hành chính hãng</option>
                			</select>
                		</div>
                    </div>
		        </div>
			</div>	
	</div>
</div>
<div class="row p-3">
	<div class="col-12 p-3 bg-white text-right fixed-bottom" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
		<button class="btn btn-danger btn-sm">Hủy</button>
		<button class="btn btn-outline-primary btn-sm ml-3 mr-3">Lưu nháp</button>
		<button class="btn btn-primary btn-sm">Tạo và bật bán</button>
	</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    // $('.select2bs4').select2({
    
    // });
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
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
    	if (count_check > 0 && count_check <= 2 && $(this).is(":checked")) {
        	$('#'+id+'').prop('disabled', false);
        	var thead = '';
        	thead +='<th class="th-'+id+'">'+get_name+'</th>';
        	$('.show-thead').prepend(thead);
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
$('.select2bs4').select2({theme: 'bootstrap4',allowClear: true}).on('select2:open', function () {
    var a = $(this).data('select2');
    var id = $(this).data('select2-id');
    if (!$('.select2-link').length) {
        a.$results.parents('.select2-results')
                .append('<div style="padding: 6px 12px;" class="select2-link"><a style="cursor:pointer;" class="new-item">Thêm mới <i class="fas fa-plus"></i></a></div>')
                .on('click', function() {
                    
                    var newval = prompt("Lựa chọn mới: ");
                    if(newval !== null) {
                        if ($('#'+id+'').find("option[value='" + newval + "']").length) {
                            $('#'+id+'').val(newval).trigger("change");
                        } else { 
                          // Create the DOM option that is pre-selected by default
                          var newState = new Option(newval, newval, true, true);
                          // Append it to the select
                          $('#'+id+'').append(newState).trigger('change');
                        }
                        a.trigger('close'); 
                    }  
                });

				 }
});
$('.select2bs4').change(function(){
	
	var id_check = $(".check_choose:checked").map(function () {return this.value;}).get().join(",");
	
	let arr_id = id_check.split(',');
	for (var d = 0;d<arr_id.length;d++) {
			if(d == 0)
				var giatri = $('#'+arr_id[d]+'').val();
			else
				var giatri2 = $('#'+arr_id[d]+'').val();
	}
	// alert(giatri);
	// alert(giatri2);
	var output = '';
	var count_check = $('.check_choose:checked').length;
	// alert(count_check)
	if(count_check == 1)
	{
		// var giatri = $('#'+id_check+'').val();
		for(var i=0;i<giatri.length;i++)
		{
	    output +='<tr><td>'+giatri[i]+'</td>';
			output +='<td><input type="text" class="form-control"></td>';
			output +='<td><input type="text" class="form-control"></td>';
			output +='<td><input type="text" class="form-control"></td>';
		output +='</tr>';
		}
		// $('.insert-row').html(output);
	}

	else if(count_check==2)
	{
		
		for(var i=0;i<giatri.length;i++)
			for (var j = 0; j <giatri2.length; j++)
			{
				if(giatri2[j] != null)
				{
		    	output +='<tr><td>'+giatri2[j]+'</td>';
		    	}
				else
				{
					output +='<tr><td></td>';
				}
		    	if(giatri[i] != null)
		    	{
		    		output +='<td>'+giatri[i]+'</td>';
				}
				else
				{
					output +='<td></td>';	
				}
				output +='<td><input type="text" class="form-control"></td>';
				output +='<td><input type="text" class="form-control"></td>';
				output +='<td><input type="text" class="form-control"></td>';
				output +='</tr>';
			}
		
	}
	else
	{
		output = '';
	}
	$('.insert-row').html(output);	
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

	$('.open-card-1').on('click',function(){
		$('.cb-1').slideDown(300);
		$('.cb-2').slideUp();
		$('.cb-3').slideUp();
		$('.c-1').addClass("bg-primary");
		$('.c-2').removeClass("bg-primary");
		$('.c-3').removeClass("bg-primary");

	});
	$('.open-card-2').on('click',function(){
		$('.cb-2').slideDown(300);
		$('.cb-1').slideUp();
		$('.cb-3').slideUp();
		$('.c-2').addClass("bg-primary");
		$('.c-1').removeClass("bg-primary");
		$('.c-3').removeClass("bg-primary");
	});
	$('.open-card-3').on('click',function(){
		$('.cb-3').slideDown(300);
		$('.cb-2').slideUp();
		$('.cb-1').slideUp();
		$('.c-3').addClass("bg-primary");
		$('.c-2').removeClass("bg-primary");
		$('.c-1').removeClass("bg-primary");
	});
    

</script>
@endsection