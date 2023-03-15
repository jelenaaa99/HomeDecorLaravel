<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Brand
{
    function getBrands(){
        return DB::table('brands')->get();
    }

    function getSingleBrand($brandId){
        return DB::table('products as p')
            ->select('p.*', 'c.name as catName', 'c.description as catDesc', 'c.route as route', 'b.name as brandName', 'b.description as brandDesc')
            ->join('categories as c', 'p.category_id', 'c.id')
            ->join('brands as b', 'p.brand_id', 'b.id')
            ->where('p.brand_id', '=', $brandId)
            ->paginate(12);
    }
}
