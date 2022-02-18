@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tạo danh mục</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
              <li class="breadcrumb-item active">tạo</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection    
@section('content')
<div class="row">
  <div class="col-12">
    <form>
      <div class="form-group">
        <label>Thuộc danh muộc</label>
        <select class="form-control form-control-sm rounded-0">
          <option>-- Root --</option>
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
    </form>
  </div>
</div>	
@endsection