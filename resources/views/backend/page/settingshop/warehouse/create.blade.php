@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Địa chỉ shop mới</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
            {{-- <div class="text-right"> --}}

            {{-- </div> --}}
          </div><!-- /.col -->
        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
@endsection    
@section('content')
<div class="row p-2">
  <style type="text/css">
    .select2-container--default .select2-selection--single{
      height: calc(2.25rem + 2px)!important;
      border-radius: 0px!important;
    }
  </style>
	<div class="col-12 bg-white p-1" sty>
    <div class="d-flex justify-content-center">
                  <div style="width: 50%;">
                    <form action="{{route('warehouse.store')}}" method="post">
                      @method('POST')
                      @csrf
                    <div class="form-group">
                      <label>Tỉnh</label>
                      <select data-type="city" class="form-control rounded-0 js-location select2" name="city" id="city">
                        <option selected disabled>Vui lòng chọn tỉnh !!</option>
                        
                        @foreach($citys as $city)
                          @if(old('city') != null && old('city') == $city->matp)
                            <option selected value="{{$city->matp}}">{{$city->name}}</option>
                          @else
                            <option value="{{$city->matp}}">{{$city->name}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Quận/Huyện</label>
                      <select data-type="district" class="form-control rounded-0 js-location select2" id="district" name="district">
                        @if(old('district') != null)
                        <option selected disabled>Mời bạn chọn quận huyện</option>
                        @foreach($districts as $district)
                          @if(old('district') == $district->id)
                            <option selected value="{{$district->id}}">{{$district->name}}</option>
                          @else
                            <option value="{{$district->id}}">{{$district->name}}</option>
                          @endif
                        @endforeach
                        @else
                        <option selected disabled>Vui lòng chọn tỉnh trước</option>
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Xã/Phường</label>
                      <select name="wards" class="form-control rounded-0 select2" id="wards">
                        @if(old('wards') != null)
                        <option selected disabled>Mời bạn chọn xã phường thị trấn</option>
                          @foreach($wards as $ward)
                            @if(old('wards') == $ward->id)
                              <option selected value="{{$ward->id}}">{{$ward->name}}</option>
                            @else
                              <option value="{{$ward->id}}">{{$ward->name}}</option>
                            @endif
                          @endforeach
                        @else
                          <option selected disabled>Vui lòng chọn quận huyện trước</option>
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="check1" name="type[]" value="1"
                      @if(old('type') != null && in_array("1",old('type')))
                      checked 
                      @endif
                      >
                      <label for="check1"> Kho lấy hàng</label><br>
                      <input type="checkbox" id="check2" name="type[]" value="2"
                      @if(old('type') != null && in_array("2",old('type')))
                      checked 
                      @endif
                      >
                      <label for="check2"> Kho trả hàng</label><br>
                    </div>
                    <div class="form-group">
                      <button class="col btn btn-primary">Thêm mới</button>
                    </div>
                    </form>
                  </div>
                </div>
	</div>
</div>	
@endsection
@section('js')
<script type="text/javascript">
  $('.select2').select2();  

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
</script>
@endsection