<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CustomerItemController extends Controller
{
    public function index(){
    	$items = Item::all();
    	return view('customer.items_list',compact('items'));
    }

    public function show(Item $item){
    	return view('customer.ItemReview');
    }

}
