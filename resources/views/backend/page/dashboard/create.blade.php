
@extends('backend.page.dashboard.layout_dash')
@section('content')
<style type="text/css">
  .select2-container--default .select2-selection--single{
    height: auto!important;
  }
</style>
@if (session('status'))
  <script>
    color = 'success';

    $.notify({
      icon: "nc-icon nc-check-2",
      message: "{{session('status')}}"

    }, {
      type: color,
      timer: 3000,
      placement: {
        from: 'top',
        align: 'right'
      }
    });
  </script>
@endif
@if ($errors->any())
  @foreach ($errors->all() as $error)
    <script>
    color = 'danger';

    $.notify({
      icon: "nc-icon nc-simple-remove",
      message: "{{ $error }}"

    }, {
      type: color,
      timer: 5000,
      placement: {
        from: 'top',
        align: 'right'
      }
    });
  </script>
  @endforeach
@endif
<div class="row">
    <div class="col-md-12 p-5">
      <div class="card card-default rounded-0">
        <div class="card-header">
          <h3 class="card-title">Đăng kí trở thành người bán hàng</h3>
        </div>
        <div class="card-body p-0">
          
          <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#info-shop-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="info-shop-part" id="setting-info-shop">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Thông tin cửa hàng</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#shipping-information-setting">
                <button type="button" class="step-trigger" role="tab" aria-controls="shipping-information-setting" id="shipping-information-setting-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Cài đặt vận chuyển</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#address-setting">
                <button type="button" class="step-trigger" role="tab" aria-controls="address-setting" id="address-setting-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label">Địa chỉ shop</span>
                </button>
              </div>
              
              
            </div>
            <form action="{{route('newseller')}}" method="post">
              @method('POST')
              @csrf
            <div class="bs-stepper-content">
              <!-- your steps content here -->
               
              <div id="info-shop-part" class="content" role="tabpanel" aria-labelledby="setting-info-shop">
                
                  <div style="padding-left: 300px;padding-right: 300px;">
                  <div class="form-group">
                      <label><span class="text-danger">* </span> Tên shop</label>
                      <input class="form-control rounded-0 name-shop @error('name_shop') is-invalid @enderror" type="text" maxlength="30" name="name_shop" value="{{old('name_shop')}}">
                      <small class="message-name-shop text-danger"></small>
                  </div>
                  <div class="form-group">
                      <label><span class="text-danger">* </span> Email</label>
                      <input class="form-control rounded-0 email @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}">
                      <small class="message-email text-danger"></small>
                  </div>
                  <div class="form-group">
                      <label><span class="text-danger">* </span> Số điện thoại</label>
                      <input class="form-control rounded-0 phone @error('phone') is-invalid @enderror" type="number" name="phone" value="{{old('phone')}}">
                      <small class="message-phone text-danger"></small>
                  </div>
                  </div>
                <div class="text-right">
                  {{-- <span id="next-1-to-2">Click</span> --}}
                  <a class="btn btn-primary" id="next-1-to-2">Tiếp tục</a>
                </div>
              </div>
              <div id="shipping-information-setting" class="content" role="tabpanel" aria-labelledby="shipping-information-setting-trigger">
                <div class="form-group d-flex justify-content-center">
                    
                    <div class="accordion"  style="width: 50%;" id="accordionExample">

                      
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Nhà bán đóng gói, sàn lấy và giao
                            </button>
                            <div class="float-right">
                              <input type="checkbox" name="choose[]" value="1" 
                                @if(old('choose') != null)
                                @if(in_array("1", old('choose'))) 
                                checked 
                                @endif
                                @endif>
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
                              @if(old('choose') != null)
                                @if(in_array("3", old('choose'))) 
                                checked 
                                @endif
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
                    </div>  
                    
                </div>
                <div class="text-right">
                <a type="button" class="btn btn-primary" onclick="stepper.previous()">Trở lại</a>
                <a type="button" class="btn btn-primary" onclick="stepper.next()">Tiếp tục</a>
                </div>
              </div>
              <div id="address-setting" class="content" role="tabpanel" aria-labelledby="address-setting-trigger">
                <div class="d-flex justify-content-center">
                  <div style="width: 50%;">
                    <div class="form-group">
                      <label>Tỉnh</label>
                      <select data-type="city" class="form-control rounded-0 js-location select2" name="city">
                        <option selected disabled>Vui lòng chọn tỉnh !!</option>
                        
                        @foreach($citys as $city)
                        <option value="{{$city->matp}}">{{$city->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Quận/Huyện</label>
                      <select data-type="district" class="form-control rounded-0 js-location select2" id="district" name="district">
                        <option selected disabled>Vui lòng chọn tỉnh trước</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Xã/Phường</label>
                      <select name="wards" class="form-control rounded-0 select2" id="wards">
                        <option selected disabled>Vui lòng chọn quận huyện trước</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="check1" name="type[]" value="1">
                      <label for="check1"> Kho lấy hàng</label><br>
                      <input type="checkbox" id="check2" name="type[]" value="2">
                      <label for="check2"> Kho trả hàng</label><br>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                <a type="button" class="btn btn-primary" onclick="stepper.previous()">Trở lại</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>  Lưu lại</button>
                </div>
              </div>
              
            </div>
            </form>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
{{-- @endif --}}
@endsection
@section('js')
<script type="text/javascript">
  $('.select2').select2();    
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))   
   function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
  }
  
  $('#next-1-to-2').click(function(){
    var nameshop = $('.name-shop').val();
    var email = $('.email').val();
    var phone = $('.phone').val();
    if(nameshop == '' || email == '' || phone == '')
    { 
      if(nameshop == '')
      {
        $('.message-name-shop').html('Vui lòng điền tên shop');
        $('.name-shop').css('border-color','red');
      }
      if(email == '')
      {
        $('.message-email').html('Vui lòng nhập email');
        $('.email').css('border-color','red');
      }
      if(phone == '')
      {
        $('.message-phone').html('Vui lòng nhập số điện thoại');
        $('.phone').css('border-color','red');
      }
    }
    else if(!validateEmail(email))
    {
      $('.message-email').html('Email chưa đúng định dạng');
        $('.email').css('border-color','red');
    }
    else
    {
      stepper.next();
    }
  });
  $('.name-shop').focus(function(){
    $('.message-name-shop').html('');
    $('.name-shop').css('border-color','');
  });
  $('.email').focus(function(){
    $('.message-email').html('');
    $('.email').css('border-color','');
  });
  $('.phone').focus(function(){
    $('.message-phone').html('');
    $('.phone').css('border-color','');
  });
  
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('.js-location').change(function(event){
    event.preventDefault();
    let route = '{{route('getlocation')}}';
    let parentId = $(this).val();
    let type = $(this).attr('data-type');
    // alert(parentId);
    // alert(type);
    $.ajax({
      url: route,
      type: 'GET',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {type:type,parent:parentId},
      success: function (data) {
          let html = '';
          let element = '';
          if(type == 'city')
          {
            html='<option selected disabled>Mời bạn chọn quận huyện</option>';
            element = '#district';
            $('#wards').html('<option selected disabled>Vui lòng chọn quận huyện trước</option>');
          }
          else
          {

            html="<option selected disabled>Mời bạn chọn xã phường</option>'";
            element = '#wards';
          }

          // console.log(data);
          $.each(data, function(i, obj) {
            html +='<option value="'+obj.id+'">'+obj.name+'</option>'
          });
          $(element).html('').append(html);
      },
      error: function (data) {
          alert(data.responseText);
      }
    });
  });
  
    // .done(function (msg) {
    //   if (msg.data) {
    //     let html = '';
    //     let element = '';
    //     if(type == 'city')
    //     {
    //       html='<option>Mời bạn chọn quận huyện</option>';
          
    //       element = '#district';
    //     }
    //     else
    //     {

    //       html="<option>Mời bạn chọn xã phường</option>'";
    //       element = '#wards';
    //     }
    //     $.each(msg.data,funtion(index,value)){
    //         html +='<option value="'+value.id+'">'+value.name+'</option>'
    //     }
    //     $(element).html('').append(html);

    //   }
    // });

  
  // })

</script>
@endsection