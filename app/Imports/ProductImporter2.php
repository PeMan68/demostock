<?php

namespace App\Imports;

use App\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImporter2 implements ToCollection
{
    public function collection(Collection $rows)
    {
         Validator::make($rows->toArray(), [
             '*.0' => 'required',
         ])->validate();
        foreach ($rows as $row) {
            Product::create([
				'item' 				=> $row[0],
				'item_description'	=> $row[1],
				'listprice' 		=> $row[2],
				'created_at' 		=> date('Y-m-d H:i:s'),
				'updated_at' 		=> date('Y-m-d H:i:s'),
            ]);
        }
    }
}
