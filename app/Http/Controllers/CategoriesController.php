<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = category::all();
        return response($categories, 200, ['data has send successfully']);
        
    }
    public function show($id){
        $category = category::find($id);
        return response($category, 200, ['data has send successfully']);
        
    }
   
    
}
