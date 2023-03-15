<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends BasicController
{
    private $productModel;

    function index(){
        return view("pages.categories-of-products", $this->data);
    }

    function get($route, $subId, Request $request){

        if($request->ajax()){
            if(!$subId) return response()->json([]);
            $res = ((new Products())->get($subId, $request));
            return response()->json($res);

        }
        else {
            $this->productModel = new Products();
            $this->data['products'] = $this->productModel->get($subId, $request) ? $this->productModel->get($subId, $request) : [];

            return view('pages.products', $this->data);
        }
    }

    function showSingleProduct($route, $id){
        $this->productModel = new Products();
        $this->data['product'] = $this->productModel->getSingleProduct($id);

        return view('pages.product', $this->data);
    }
}
