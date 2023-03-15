<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public $data;
    private $menuCatModel;
    public $modelBrand;
    public $nameRegex = '/^[A-ZŠĐČĆŽ][a-zšđčćž]{2,14}(\s[A-ZŠĐČĆŽ][a-zšđčćž]{2,14})*$/';
    public $phoneRegex = '/^06[01234569]\/[\d]{3}\-[\d]{3,4}$/';
    public $addressRegex = '/^([\d\.]{1,3}(\s)?|[a-zšđčćžA-ZŠĐČĆŽ\.]{2,14}(\s)?)+(\s[\d\.]{1,3}|[a-zšđčćžA-ZŠĐČĆŽ\.]{2,14})*$/';
    public $passRegex = '/^[A-z0-9\_\.\-]{6,}$/';

    function __construct()
    {
        $this->menuCatModel = new Categories();
        $this->data['categories'] = $this->menuCatModel->getCategories();

        $this->modelBrand = new Brand();
        $this->data['brands'] = $this->modelBrand->getBrands();
    }
}
