<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($category_id){

        $products = product::where("category_id", $category_id)->get();
    

        return response($products, 200, ['ok']);

    }
    public function show($category_id, $product_id){

        $product = product::where("category_id", $category_id)->where('id', $product_id)->first();
    

        return response($product, 200, ['ok']);

    }
}
