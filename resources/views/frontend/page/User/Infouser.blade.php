
@extends('layouts.user')

@section('content')
<div class=""><h4 style="text-align: center; font-weight: bold;">Thông tin tài khoản</h4></div>
<div class="col-9"> 
  <div class="card card-default" id="card-1">
    <div class="card-header c-1 bg-primary" style="cursor: pointer;">
      <h3 class="card-title"><strong>1. Thông tin cá nhân</strong></h3>
    </div>
    <div class="card-body cb-1">
      <div class="form-group">
        <label><span class="text-danger">* </span>Họ và tên: </label>
        <input type="text" name="" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label><span class="text-danger">* </span> Danh mục</label>
        <input type="text" name="" class="form-control form-control-sm">
      </div>
      <div class="form-group row">
        <label><span class="text-danger">* </span> Giới tính</label>
        <div class="col-6">
         <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Nam
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Nữ
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Khác
          </label>
        </div>
      </div>
      <div class="col-6">
        <label><span class="text-danger">* </span> Quốc tịch</label>
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
</div></div></div>
@endsection