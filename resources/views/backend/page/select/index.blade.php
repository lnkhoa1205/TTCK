@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách gợi ý</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gợi ý</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        <div class="row">
        	<div class="col-12 text-right pt-2">
            <div class="border-top border-gray-300 pt-2 mt-2">
              <form action="{{route('select.store')}}" class="d-flex justify-content-end" method="post">
                @method("POST")
                @csrf
                <div class="col-4">
                  <input type="text" class="form-control rounded-0 @error('name_select') is-invalid @enderror" name="name_select" placeholder="Tạo gợi ý mới !" required oninvalid="this.setCustomValidity('Vui lòng nhập tên gợi ý')" oninput="setCustomValidity('')" value="{{old('name_select')}}">  
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Tạo</button>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
@endsection    
@section('content')

<div class="row p-2">
  
	<div class="col-12 bg-white p-1">
		<button  class="btn btn-danger btn-sm mb-2 mt-1 delete_all"  data-url="{{ url('myselectsDeleteAll') }}"><i class="fas fa-trash-alt"></i> Xóa dòng đã chọn</button>
 
    <div class="table-responsive-xl"  >
      <table class="table table-bordered" id="PhanTrang" >
        <thead class="bg-white">
          <tr>
            <th width="5%" class="text-center"><input id="master" type="checkbox" /></th>
            <th width="55%">Tên gợi ý </th>
            <th width="15%">Thời gian thêm</th>
            <th width="15%">Thời gian sửa</th>
            <th width="10%" class="text-center">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach($selects as $select)
          @if(isset($edit_select) && $edit_select->id == $select->id)
          <tr>
            <form action="{{route('select.update',['select'=>$edit_select->id])}}" method="post">
            @method("PUT")
            @csrf
            <td class="text-center"><input type="checkbox" class="sub_chk" data-id="{{$select->id}}"></td>
            
            <td><input type="text" class="form-control form-control-sm rounded-0 @error('name_select') is-invalid @enderror"  name="name_select" placeholder="Tạo gợi ý mới !" required oninvalid="this.setCustomValidity('Không bỏ trống')" oninput="setCustomValidity('')" value="{{$select->name_select}}"></td>
            
            <td>{{$select->created_at}}</td>
            <td>{{$select->updated_at}}</td>
            <td class="text-center">
              <button type="submit" class="btn btn-success btn-sm mr-1"><i class="fas fa-wrench"></i></button>
              <a class="btn btn-danger btn-sm" href="{{route('select.index')}}"><i class="fas fa-times"></i></a>
            </td>
            </form>
          </tr>
          
          @else
          <tr>
            <td class="text-center"><input type="checkbox" class="sub_chk" data-id="{{$select->id}}"></td>
            
            <td>{{$select->name_select}}</td>
            
            <td>{{$select->created_at}}</td>
            <td>{{$select->updated_at}}</td>
            <td class="text-center">
              <a class="btn btn-outline-warning btn-sm mr-1" title="sửa {{$select->name}}" href="{{route('select.edit', ['select' => $select->id ])}}"><i class="fas fa-edit"></i></a>
              <form action="{{ route('select.destroy', ['select' => $select->id ]) }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Bạn có chắc muốn xóa gợi ý lựa chọn ?');" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
              </form>

            </td>

          </tr>
          @endif
          @endforeach
          

        </tbody>
      </table>
    </div>
  
	</div>
</div>	
@endsection