<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Statusses;


class ProductController extends Controller
{
    public function showdata(Request $request) {
        
        $pr = Products::find(1);
        $res = $pr;
         return view('products', ['data' => $res]);


    }
}
