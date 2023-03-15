<?php

namespace App\Http\Controllers;

use App\Models\HomeImages;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends BasicController
{
    private $imgModel;
    private $modelProduct;

    function index(){
        $this->imgModel = new HomeImages();
        $this->data['slider'] = $this->imgModel->getSlider();
        $this->data['gallery'] = $this->imgModel->getGallery();

        $this->modelProduct = new Products();
        $this->data['spotlight'] = $this->modelProduct->spotlightProducts();

        return view('pages.home', $this->data);
    }

    function about(){
        return view('pages.about', $this->data);
    }

    function author(){
        return view('pages.author', $this->data);
    }

}
