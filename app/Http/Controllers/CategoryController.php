<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends BasicController
{
    private $categoryModel;

    function show($parentId){
        $this->categoryModel = new Categories();
        $this->data['subcategories'] = $this->categoryModel->getSubCategories($parentId);
        $this->data['mainCategory'] = $this->categoryModel->getSingleCategory($parentId);


        return view('pages.subcategories', $this->data);
    }

}
