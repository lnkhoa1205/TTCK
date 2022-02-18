@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách danh mục</h1>
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
  
	<div class="col-12 bg-white p-1">
		<button  class="btn btn-danger btn-sm mb-2 mt-1 delete_all"  data-url="{{ url('mycategorysDeleteAll') }}"><i class="fas fa-trash-alt"></i> Xóa dòng đã chọn</button>
 
    <div class="table-responsive-xl"  >
      <table class="table table-bordered" id="PhanTrang" >
        <thead class="bg-white">
          <tr>
            <th width="5%" class="text-center"><input id="master" type="checkbox" /></th>
            <th width="55%">Tên danh mục </th>
            <th width="15%">Thời gian thêm</th>
            <th width="15%">Thời gian sửa</th>
            <th width="10%" class="text-center">Chức năng</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach($categories as $category)
          <tr>
            <td class="text-center"><input type="checkbox" class="sub_chk" data-id="{{$category->id}}"></td>
            <td>
            @php 
            $str = '';
          
            for($i = 0;$i < $category->level;$i++)
            {
              echo $str;

              $str .='<i class="fas fa-heart" style="font-size:10px;"></i> ';
            }
            @endphp @if($category->parent_id == 0 )<strong>{{$category->name_category}}</strong>@else {{$category->name_category}} @endif
            
            </td>
           
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  
	</div>
</div>	
@endsection