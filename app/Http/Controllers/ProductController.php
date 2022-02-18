<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Select;
use App\Models\Category;
use App\Models\Choose;
use App\Models\Product;
use App\Models\Image;
use App\Models\Warehouse;
use App\Models\Ship;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->where('user_id',Auth::id())->get();//
        return view('backend.page.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selects = Select::with('option')->get();
        $categories = $this->getCategory();
        $ship = Ship::where('user_id',Auth::id())->first();
        $warehouses = Warehouse::where('user_id',Auth::id())->where('type', 'like', '%1%')->get();

        // dd($warehouses);
        return view('backend.page.product.add',compact('selects','categories','warehouses','ship'));
    }
    public function getCategory(){
        $categories = Category::orderBy('id','DESC')->get();
        $listCategory = [];
        Category::recursive($categories,$parents = 0,$level = 1,$listCategory);
        return $listCategory;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name_genre' => 'required|unique:products|max:255',
            ],
            [
                'name_genre.unique' => 'Trùng tên!!',
            ]);
        $product = new Product();
        
        
        $product->name_product = $request->name_product;
        $product->category_id  = $request->category_id;
        $product->trademark  = $request->trademark;//thương hiệu
        $product->origin  = $request->origin;//xuất xứ
        $product->video  = $request->video;
        $product->description  = $request->description;
        $product->size_product  = $request->size_product;//mô tả kích thước
        $product->ship  = $request->ship;//mô hình giao
        $product->choose  = $request->choose;//lựa chọn 1 hoặc nhiều
        $product->guarantee  = $request->guarantee;//bả0 hành
        $product->user_id = Auth::id();
        if($request->guarantee == 1)
        {
                 
            if($request->time_guar == 'full')
            {
                $product->time_guar = 'full';
            }
            else
            {
                $product->time_guar = $request->time_guar.' '.$request->op_time_guar;
            }
            $product->warranty_form  = $request->warranty_form;
            $product->type_guar  = $request->type_guar;//hình thức
        }
        
        
        //xử lí hình ảnh chính
        $image_main = $request->file('image_main');
        $nameimg_main = $image_main->getClientOriginalName();
        $path = $image_main->move('images', $nameimg_main);
        $product->image_main = $nameimg_main;
        
        if($request->ship == 1)//điều kiện nhà bán tự gói và sàn giao
        {
            $product->warehouse_id   = $request->warehouse_id;//địa chỉ kho
            $quantity = $request->quantity;           
        }
        else
        {
            $quantity = 0;
        }
        
        $product->slug = Str::of($request->name_product)->slug('-');
        $product->save();
        //// xử lí slide ảnh
        $items = $request->file('image_slide');
        foreach($items as $item)
        {
            $nameimg_slide = $item->getClientOriginalName();
            $path = $item->move('images', $nameimg_slide);
            //lưu vào db
            $image_md = new Image();
            $image_md->name_img = $nameimg_slide;
            $image_md->product_id = $product->id;
            $image_md->save();
        }
        
        
        
        if($request->choose == 1)//mặt hàng không có lựa chọn
        {
            $choose = new Choose();
            $choose->product_code = $request->product_code;
            $choose->price = $request->price;
            $choose->product_id = $product->id;
            $choose->quantity = $quantity;
            $choose->save();
        }
        else//nhiều lựa chọn
        {
            $option_ids = $request->option_id;
            $product_codes = $request->product_codes;
            $product_prices = $request->prices;
            $product_quantities = $request->quantities;
            $image_chooses = $request->file('image_choose');
            $i = 0;
            // dd($option_ids[0]);
            for ($i=0; $i < count($option_ids) ; $i++)
            {
               
                $choose = new Choose();
                $choose->product_code = $product_codes[$i];
                $choose->option_id = $option_ids[$i];
                $choose->price = $product_prices[$i];
                $choose->product_id = $product->id;
                $choose->quantity = $product_quantities[$i];

                // dd()
                $nameimg_choose = $image_chooses[$i]->getClientOriginalName();
                $path = $image_chooses[$i]->move('images', $nameimg_choose);
                $choose->image_choose = $nameimg_choose;
                
                $choose->save();
            }
        }
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
