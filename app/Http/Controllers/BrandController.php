<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends BasicController
{
    public $modelBrand;

    function index(){
         return view('pages.brands', $this->data);
    }

    function singleBrand($brandId){
        $this->modelBrand = new Brand();
        $this->data['productsBrand'] = $this->modelBrand->getSingleBrand($brandId);

        return view('pages.brand', $this->data);
    }
}
