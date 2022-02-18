@extends('backend.page.dashboard.layout_dash')
@section('content')
{{-- @if() --}}
<div class="row">
  <div class="col-12">
    <div class="card mt-3">
      <div class="card-body pt-5 pb-5">
        <center>
        <img  style="max-height:250px;margin: 10px 5px 10px 5px;" src="{{asset('images/banner-channel.png')}}">
        <br>
        <h3>Chào mừng đến với kênh người bán</h3>
        <h5>Để đăng ký bán hàng trên Shopee, bạn cần cung cấp một số thông tin cơ bản.</h5>
        <a class="btn btn-danger" href="{{route('sellercenter_new')}}">Đăng ký</a>
        </center>
      </div>
    </div>
  </div>
</div>
{{-- @endif --}}
@endsection
