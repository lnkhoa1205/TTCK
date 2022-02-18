<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Store;
use App\Models\Ship;

class SettingShopController extends Controller
{
    public function info()
    {

        $store = Store::where('user_id',Auth::id())->first();
        // dd($store);
        return view('backend.page.settingshop.info',compact('store'));
    }
    public function UpdateInfo(Request $request,$id)
    {
        $store = Store::find($id);
        // dd($request->all());
        $store->name_shop = $request->name_shop;
        $store->phone = $request->phone;
        $store->description = $request->description;
        $avt = $request->file('avt');
        if($avt)
        {
            $nameavt = $avt->getClientOriginalName();
            $path = $avt->move('images', $nameavt);  
            $store->avt = $nameavt;  
        }
        $background = $request->file('background');
        if($background)
        {
            $namebg = $background->getClientOriginalName();
            $path = $background->move('images', $namebg);
            $store->background = $namebg;    
        }
        $store->save();
        return redirect()->back()->with('status','Đã cập nhật thông tin shop');
    }
    public function ship()
    {
        $ship = Ship::where('user_id',Auth::id())->first();
        return view('backend.page.settingshop.ship',compact('ship'));
    }
    public function updateShip(Request $request, $id)
    {
        $ship = Ship::find($id);
        $ship->choose = implode(",",$request->choose);
        $ship->save();
        return redirect()->back()->with('status','Cập nhật thành công');
    }
}
