<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products
{
    function get($subId, Request $request){

        $query = DB::table('products as p');
            $query= $query->select('p.*', 'c.name as catName', 'c.description as catDesc', 'c.route as route', 'b.name as brandName');
             $query= $query->join('categories as c', 'p.category_id', 'c.id');
             $query= $query->join('brands as b', 'p.brand_id', 'b.id');
             $query= $query->where('p.category_id', '=', $subId);

             //Keyword
            if($request->has('word')){
                $query= $query->where('p.name', 'like', '%'.$request->get('word').'%');
            }

            if($request->has('brands')){
                $query = $query->whereIn("p.brand_id", $request->get("brands"));
            }

            //Oreder By
            if($request->has('sort')){
                $query = $query->orderBy('price',  $request->get("sort"));
            }

             $query= $query->paginate(12);

             return $query;
    }

    function getSingleProduct($id){
        return DB::table('products as p')
            ->select('p.*', 'c.name as catName', 'c.description as catDesc', 'b.name as brandName')
            ->join('categories as c', 'p.category_id', 'c.id')
            ->join('brands as b', 'p.brand_id', 'b.id')
            ->where('p.id', '=', $id)
            ->first();
    }

    function spotlightProducts(){
        return DB::table('products as p')
            ->select('p.*', 'c.route as route', 'b.name as brandName')
            ->join('categories as c', 'p.category_id', 'c.id')
            ->join('brands as b', 'p.brand_id', 'b.id')
            ->where('spotlight', '=', 1)
            ->get();
    }

    function getAllProducts(Request $request){
        $query = DB::table('products as p');
        $query= $query->select('p.*', 'c.name as catName', 'c.description as catDesc', 'c.route as route', 'b.name as brandName');
        $query= $query->join('categories as c', 'p.category_id', 'c.id');
        $query= $query->join('brands as b', 'p.brand_id', 'b.id');


        //filter category
        if($request->has('chbCat')){
            $query= $query->whereIn('category_id', $request->get('chbCat'));
        }

        //filter brand
        if($request->has('chbBrand')){
            $query= $query->whereIn('brand_id', $request->get('chbBrand'));
        }

        //search
        if($request->has('search')){
            $query= $query->where('p.name', 'like', '%'.$request->get('search').'%');
        }

        $query= $query->orderBy('id', 'asc');
        $query= $query->paginate(20);

        return $query;
    }

    function insert($name, $desc, $price, $spot, $cat, $brand, $fileName, $admin_img){
        return DB::table('products')
            ->insert([
                'name'=>$name,
                'description'=>$desc,
                'price'=>$price,
                'img'=>$fileName,
                'spotlight'=>$spot,
                'category_id'=>$cat,
                'brand_id'=>$brand,
                'admin_img'=>$admin_img
            ]);
    }

    function delete($id){
        $product = DB::table("products")->where("id", "=", $id)->first();


        if (DB::table('order_line_table')->where('product_id',"=", $id)->exists()) {
            return -1;
        }

        DB::table("products")->where("id", "=", $id)->delete();
    }
}
