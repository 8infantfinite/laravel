<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
class ProductController extends Controller
{
    public function getCategory($id = 0){
		$all = Products::where('categories_id', $id)
		->orderBy('id', 'DESC')
		->paginate(10);
		$cat = Categories::find($id);
		return view('products')->with('all', $all)->with('cat', $cat);
	}
}
