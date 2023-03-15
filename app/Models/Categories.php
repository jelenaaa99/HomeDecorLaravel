<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;

    function getCategories(){
        return DB::table('categories')
            ->where('menu', '=', 1)
            ->get();
    }

    function getAllSubCategories(){
        return DB::table('categories')
            ->where('menu', '=', 0)
            ->get();
    }

    function getSingleCategory($id){
        return DB::table('categories')
            ->where('id', '=', $id)
            ->first();
    }

    function getSubCategories($parentId){
        return DB::table('categories')
            ->where('menu', '=', 0)
            ->where('parent_id', '=', $parentId)
            ->get();
    }
}
