<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'company_name' => 'required',
            'purchase_price' => 'required',
            'sales_price' => 'required',
            'expiry_date' => 'required',
            'cat_id' => 'required',
            'image' => 'file|max:2000|mimes:jpeg,bmp,png,jpg',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $user_pic = $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $user_pic);
        }
        $item = new Item();
        $item->name = $request->input('name');
        $item->company_name = $request->input('company_name');
        $item->purchase_price = $request->input('purchase_price');
        $item->sales_price = $request->input('sales_price');
        $item->expiry_date = $request->input('expiry_date');
        $item->cat_id = $request->input('cat_id');
        $item->pic = $user_pic;
        
        if($item->save()){
            return back()->with('message','Your item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.item.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {

        $categories = Category::all();
        $items = Item::find($item);
        return view('admin.item.edit',compact('items','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([

            'name' => 'required',
            'company_name' => 'required',
            'purchase_price' => 'required',
            'sales_price' => 'required',
            'expiry_date' => 'required',
            'cat_id' => 'required',
            'image' => 'file|max:2000|mimes:jpeg,bmp,png,jpg',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $user_pic = $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $user_pic);
            $item->pic = $user_pic;
        }

        $item->name = $request->input('name');
        $item->company_name = $request->input('company_name');
        $item->purchase_price = $request->input('purchase_price');
        $item->sales_price = $request->input('sales_price');
        $item->expiry_date = $request->input('expiry_date');
        if($item->save()){
            return back()->with('message', 'Item updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return back();
    }
}
