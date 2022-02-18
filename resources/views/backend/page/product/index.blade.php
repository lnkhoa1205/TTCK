@extends('layouts.admin')
@section('content-header')
<div class="content-header bg-white mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sản phẩm</h1>
            
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
         <a href="{{route('product.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
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
            <th scope="col" class="text-center">Hình ảnh</th>
            <th scope="col" class="text-center">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th width="10%" class="text-center">Ảnh phụ</th>
          </tr>
        </thead>
        <tbody>
          @php $i = 1; @endphp
          @foreach($products as $product)

          <tr>
            <td class="text-center">{{$i++}}</td>
            <td class="text-center">
              <img style="max-width:80px;" src="{{asset('images/'.$product->image_main)}}">
            </td>
            <td>
              {{$product->name_product}}
            </td>
            @php
              $chooses = DB::table('chooses')->where('product_id',$product->id)->get();
            @endphp
            <td>
            @foreach($chooses as $choose)
              {{-- {{$choose->price}} --}}
              @php

              if($loop->first)
              {
                $min = $choose->price;
                $max = $choose->price;
              }

              else
              {
                if($min > $choose->price)
                  $min = $choose->price;
                else
                  $max = $choose->quantity; 
              }
              @endphp
            @endforeach
            @if($product->choose == 2 && isset($min))
              
                {{$min}} ~ {{$max}}
            @else
              @if(isset($min))
              {{$min}}
              @endif
            @endif
            </td>
            
            
           	
            <td class="text-center">
              <a class="btn btn-outline-warning btn-sm mr-1"  href="{{route('product.edit', ['product' => $product->id ])}}"><i class="fas fa-edit"></i></a>
              <form action="{{ route('product.destroy', ['product' => $product->id ]) }}" method="post" class="d-inline">
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
