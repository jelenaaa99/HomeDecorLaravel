<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeImages extends Model
{
    use HasFactory;

    function getSlider(){
        return DB::table('pictures')
            ->where('slider', '=', 1)
            ->get();
    }

    function getGallery(){
        return DB::table('pictures')
            ->where('slider', '=', 0)
            ->get();
    }
}
