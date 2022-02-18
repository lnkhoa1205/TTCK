<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Select;
use Illuminate\Validation\Rule;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selects = Select::all();
        return view('backend.page.select.index',compact('selects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.select.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_select' => 'required|unique:selects|max:255',
        ],
        [
            'name_select.unique' => 'Thông tin bạn nhập đã tồn tại!!',
        ]);
        $select = new Select();
        $select->name_select = $data['name_select'];
        $select->save();
        return redirect()->back()->with('status','Đã thêm thành công');
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
       $edit_select = Select::find($id);
       $selects = Select::all();
        return view('backend.page.select.index',compact('selects','edit_select'));
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
        $select = Select::find($id);
        $data = $request->validate([
            'name_select' => ['required',Rule::unique('selects')->ignore($select->id, 'id')],
        ],
        [
            'name_select.unique' => 'Thông tin bạn nhập đã tồn tại!!',
        ]);
        $select->name_select = $data['name_select'];
        $select->save();
        return redirect()->route('select.index')->with('status','Đã sửa thành công');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Select::where('id',$id)->delete();
        return redirect()->back()->with('status','Đã xóa thành công');
    }
     public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Select::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Xóa thành công."]);
    }
}
