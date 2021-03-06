<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Warehouse;
use App\Models\Ship;
use App\Models\Store;
use App\Models\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function sellercenter()
    {
        $store = Store::where('user_id',Auth::id())->first();
        if($store == null)
        {
            return view('backend.page.dashboard.welcome',compact('store')); 
        }
        else
        {
            return view('backend.page.dashboard.index',compact('store'));
        }
        
    }
    public function new_seller()
    {
        $citys = DB::table('devvn_tinhthanhpho')->get();
        return view('backend.page.dashboard.create',compact('citys'));
    }
    public function getLocation(Request $request)
    {
        $parentId = $request->parent;
        $type = $request->type;
        if($parentId && $type == 'city')
        {
            $locations = DB::table('devvn_quanhuyen')->where("matp",$parentId)->get();
            return response()->json($locations);
        }
        else{
            $locations = DB::table('devvn_xaphuongthitran')->where("maqh",$parentId)->get();
            return response()->json($locations);
        }
    }
    public function storenewSeller(Request $request)
    {
        // dd($request->all());
        $store = new Store();
        $ship = new Ship();
        $warehouse = new Warehouse();
        $data = $request->validate([
            'name_shop' => 'required|unique:stores|max:255',
            'email' => 'required|unique:stores|max:255',
            'phone' => 'required|unique:stores|max:255',
            'city' => 'required',
            'district' => 'required',
            'wards' => 'required',
            'type' => 'required',
              
        ],
        [
            'name_shop.unique' => 'T??n shop ???? ???????c d??ng b???i m???t ng?????i kh??c!!',
            'name_shop.required' => 'Vui l??ng nh???p t??n shop!!',
            'email.unique' => 'Email ???? ???????c d??ng b???i m???t ng?????i kh??c!!',
            'email.required' => 'Vui l??ng nh???p t??n shop!!',
            'phone.unique' => 'S??? ??i???n tho???i ???? ???????c d??ng b???i m???t ng?????i kh??c!!',
            'phone.required' => 'Vui l??ng nh???p s??? ??i???n tho???i!!',
            'city.required' => 'Vui l??ng ch???n th??nh ph???!!',
            'district.required' => 'Vui l??ng ch???n qu???n huy???n!!',
            'wards.required' => 'Vui l??ng ch???n x?? ph?????ng!!',   
            'type.required' => 'Ch??a ch???n lo???i kho!!',   
        ]);
       
        $store->name_shop = $data['name_shop'];
        $store->email = $data['email'];
        $store->phone = $data['phone'];
        $store->user_id = Auth::id();
        if($request->choose)
        {
            $ship->choose = "2,".implode(",",$request->choose);
        }
        else
        {
            $ship->choose = "2";
        }
        $ship->user_id = Auth::id();

        //Th??m ?????a ch??? kho l???y h??ng
        $warehouse->city = $data['city'];
        $warehouse->district = $data['district'];
        $warehouse->wards = $data['wards'];
        $warehouse->type = implode(",",$request->type);
        $warehouse->user_id = Auth::id();
        $warehouse->save();
        $store->save();   
        $ship->save();
        return redirect()->route('sellercenter');
    }
}
