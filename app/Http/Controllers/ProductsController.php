<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Imports\ProductImporter2;
use Maatwebsite\Excel\Facades\Excel;

class ProductsController extends Controller
{
    public function index()
	{
		$products = Product::all();
		return view('products.index',['products' => $products]);
	}
	
	public function importform()
    {
       return view('import');
    }
      
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Product::truncate(); // deletes all rows before inserting new data
		Excel::import(new ProductImporter2,request()->file('file'));
        $products = Product::all();
 		return view('products.index',['products' => $products])->with('success','All good!');
	}
}
