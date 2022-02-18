<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Warehouse;
use DB;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::where('user_id',Auth::id())->get();
        
        return view('backend.page.settingshop.warehouse.index',compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citys = DB::table('devvn_tinhthanhpho')->get();
        $districts = DB::table('devvn_quanhuyen')->get();
        $wards = DB::table('devvn_xaphuongthitran')->get();
        return view('backend.page.settingshop.warehouse.create',compact('citys','districts','wards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse = new Warehouse();
        $data = $request->validate([
         
            'city' => 'required',
            'district' => 'required',
            'wards' => 'required',
            'type' => 'required',
              
        ],
        [
            'city.required' => 'Vui lòng chọn thành phố!!',
            'district.required' => 'Vui lòng chọn quận huyện!!',
            'wards.required' => 'Vui lòng chọn xã phường!!',   
            'type.required' => 'Chưa chọn loại kho!!',   
        ]);
        $warehouse->city = $data['city'];
        $warehouse->district = $data['district'];
        $warehouse->wards = $data['wards'];
        $warehouse->type = implode(",",$request->type);
        $warehouse->user_id = Auth::id();
        $warehouse->save();
        return redirect()->route('warehouse.index')->with('status','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citys = DB::table('devvn_tinhthanhpho')->get();
        $districts = DB::table('devvn_quanhuyen')->get();
        $wards = DB::table('devvn_xaphuongthitran')->get();
        $warehouse = Warehouse::find($id);
        return view('backend.page.settingshop.warehouse.edit',compact('citys','districts','wards','warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::find($id);
        $data = $request->validate([
         
            'city' => 'required',
            'district' => 'required',
            'wards' => 'required',
            'type' => 'required',
              
        ],
        [
            'city.required' => 'Vui lòng chọn thành phố!!',
            'district.required' => 'Vui lòng chọn quận huyện!!',
            'wards.required' => 'Vui lòng chọn xã phường!!',   
            'type.required' => 'Chưa chọn loại kho!!',   
        ]);
        $warehouse->city = $data['city'];
        $warehouse->district = $data['district'];
        $warehouse->wards = $data['wards'];
        $warehouse->type = implode(",",$request->type);
        $warehouse->user_id = Auth::id();
        $warehouse->save();
        return redirect()->route('warehouse.index')->with('status','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $count = Warehouse::count();
       if($count > 1)
       {
        $delete = Warehouse::find($id)->delete();
        $mes = "Xóa thành công";
       }
       else
       {
        $mes = "Phải chừa Ít nhất một địa chỉ";
       }
       return redirect()->back()->with('status',$mes);
    }
}
