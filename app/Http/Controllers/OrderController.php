<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class OrderController extends Controller
{
	private $tovs = [];
	private $tovars = [];
	public function __construct(){
			$basket = $_COOKIE['basket'];
		$arr = explode(',', $basket);
		foreach($arr as $key => $value){
			if($value != ''){
				$sm = explode(':', $value);
				$this->tovs[$sm[0]] = $sm[1];
				$this->tovars[$sm[0]] = Products::find($sm[0]);
			}
				
		}	
	}
    public function getIndex(){


		return view('basket')->with('tovs', $this->tovs)->with('tovars', $this->tovars);
		//return view('products')->with('all', $all)->with('cat', $cat);
		
	}
	public function postIndex(){

		$body = serialize($this->tovs);
		dd($body);
		}
}
