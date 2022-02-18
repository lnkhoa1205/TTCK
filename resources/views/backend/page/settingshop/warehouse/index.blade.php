@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Địa chỉ shop</h1>
            
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
        <div class="text-right">
         <a href="{{route('warehouse.create')}}" class="btn btn-primary">Thêm địa chỉ mới</a>
         </div>
      </div><!-- /.container-fluid -->
    </div>
@endsection    
@section('content')
<div class="row p-2">
  
	<div class="col-12 bg-white p-1">
    <div class="table-responsive-xl"  >
      <table class="table table-bordered" id="PhanTrang" >
        <thead class="bg-white">
          <tr>
            <th width="5%" class="text-center">STT</th>
            <th width="50%">Địa chỉ</th>
            <th width="30%">Loại địa chỉ</th>
            <th width="10%" class="text-center">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @php $i = 1; @endphp
          @foreach($warehouses as $warehouse)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>
            	@php
            	$name_city = DB::table('devvn_tinhthanhpho')->select('name')->where('matp',$warehouse->city)->first();
            	$name_district = DB::table('devvn_quanhuyen')->select('name')->where('id',$warehouse->district)->first();
            	$name_wards = DB::table('devvn_xaphuongthitran')->select('name')->where('id',$warehouse->wards)->first();
            	
            	 @endphp
            	{{$name_city->name}}, {{$name_district->name}}, {{$name_wards->name}}
            </td>

           	<td>
           		@if(in_array('1',explode(',', $warehouse->type)) && in_array('2',explode(',', $warehouse->type)))
           		Kho lấy hàng, Kho trả hàng
           		@elseif(in_array('1',explode(',', $warehouse->type)))
           		Kho lấy hàng
           		@elseif(in_array('2',explode(',', $warehouse->type)))
           		Kho trả hàng
           		@endif
           		
           	</td>
            <td class="text-center">
              <a class="btn btn-outline-warning btn-sm mr-1"  href="{{route('warehouse.edit', ['warehouse' => $warehouse->id ])}}"><i class="fas fa-edit"></i></a>
              <form action="{{ route('warehouse.destroy', ['warehouse' => $warehouse->id ]) }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Bạn có chắc muốn địa chỉ này ?');" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
              </form>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  
	</div>
</div>	
@endsection
