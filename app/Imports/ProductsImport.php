<?php


namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;

class ProductsImport implements ToModel
{
    /*
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
	*/
	
	//SkipsOnError
    public function model(array $row)
    {
		if (!isset($row[0])) {
			return null;
		}

		return new Product([
			'item' 				=> $row[0],
			'item_description'	=> $row[1],
			'listprice' 		=> $row[2],
		]);
	}
}

 
