<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Login;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends BasicController
{
    private $modelProducts;
    private $modelCategories;
    private $modelBr;
    private $modelLogin;
    private $modelMsg;
    private $modelOrder;
    public $dataAdmin=[];

    function index(){

        $this->modelLogin = new Login();
        $this->dataAdmin['users'] = $this->modelLogin->getUsers();

        $this->modelMsg = new Contact();
        $this->dataAdmin['contact'] = $this->modelMsg->getMessage();

        return view('pages.admin.admin-home', $this->dataAdmin);
    }

    function adminProducts(Request $request){
        $this->modelProducts = new Products();
        $this->dataAdmin['products'] = $this->modelProducts->getAllProducts( $request);

        $this->modelCategories = new Categories();
        $this->dataAdmin['categories'] = $this->modelCategories->getAllSubCategories();

        $this->modelBr = new Brand();
        $this->dataAdmin['brands'] = $this->modelBr->getBrands();

        $this->dataAdmin['qs'] = $request->all();
        return view('pages.admin.admin-products', $this->dataAdmin);
    }

    function show(Request $request){
        $this->modelCategories = new Categories();
        $this->dataAdmin['categories'] = $this->modelCategories->getAllSubCategories();

        $this->modelBr = new Brand();
        $this->dataAdmin['brands'] = $this->modelBr->getBrands();

        return view('pages.admin.insert-product', $this->dataAdmin);
    }

    function insertProduct(Request $request){
        try {
            $name = $request->get('name');
            $desc = $request->get('desc');
            $price = $request->get('price');
            $spot = $request->get('spot');
            $cat = $request->get('cat');
            $brand = $request->get('brand');
            $image = $request->file("image");
            $admin_img = 1;

            $err=[];
            $ri=[];
            if(!$name){
                $err['ername'] = 'Name is required.';
            }
            else{
                $ri['name'] = $name;
            }

            if(!$desc){
                $err['erdesc'] = 'Description is required.';
            }
            else{
                $ri['desc'] = $desc;
            }

            if(!$price){
                $err['erprice'] = 'Price is required.';
            }
            else{
                $ri['price'] = $price;
            }

            if($spot!="0" && $spot!="1"){
                $err['erspot'] = 'Spot value must be 0 or 1.';
            }
            else{
                $ri['spot'] = $spot;
            }

            if(!$image){
                $err['erimg'] = 'Image is required.';
            }
            else{
                if($image->extension()!='jpg' && $image->extension()!='jpeg' && $image->extension()!='png' && $image->extension()!='gif'){
                    $err['erimg'] = 'Invalid image format.';
                }
            }

            if(count($err)!=0){
                return redirect()->route('insertProductShow')->with('err', $err)->with('ri', $ri);
            }

            $fileName = uniqid() . "_" . time() . "." . $image->extension();

            $image->storeAs("public/products", $fileName);

            $this->modelProducts = new Products();
            $insert = $this->modelProducts->insert($name, $desc, $price, $spot, $cat, $brand, $fileName, $admin_img);

            if($insert){
                return redirect()->route('insertProductShow')->with('success', 'Insert successfull.');
            }

        }
        catch (\Exception $e)
        {
            return redirect()->route('insertProductShow')->with('error', 'Server error.');
        }
    }

    function deleteProduct($id){
        try {
            $this->modelProducts = new Products();
            $result = $this->modelProducts->delete($id);

            if($result==-1){
                return redirect()->back()->with("err", "This product can not be deleted.");
            }

            return redirect()->back()->with("success", "Deleted successfully.");

        }catch(\Exception $ex) {
            return redirect()->back()->with("error", $ex->getMessage());
        }
    }

    function deleteMsg($id){
        try {
            $this->modelMsg = new Contact();
            $result = $this->modelMsg->deleteMessage($id);

            if ($result) {
                return redirect()->back()->with("successMsg", "Deleted successfully.");
            }

        }catch(\Exception $ex) {
            return redirect()->back()->with("error", $ex->getMessage());
        }
    }

    function userEdit($id){
        $this->modelLogin = new Login();
        $this->dataAdmin['user'] = $this->modelLogin->getUserById($id);

        $this->modelLogin = new Login();
        $this->dataAdmin['role'] = $this->modelLogin->getRole();

        return view('pages.admin.user-edit', $this->dataAdmin);
    }

    function doUserEdit($id, Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $country = $request->input('country');
        $city = $request->input('city');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        if(isset($password)){
            $password = md5($password);
        }
        else{
            $this->modelLogin = new Login();
            $user = $this->modelLogin->getUserById($id);
            $password = $user->password;
        }

        $err = [];
        $rightval = [];

        if(empty($firstName)){
            $err['errFirstName'] = "First name is required.";
        }
        else if(!preg_match($this->nameRegex, $firstName)){
            $err['errFormatFirstName'] = "Wrong format. E.g. Jack";
        }
        else{
            $rightval['firstName'] = $firstName;
        }

        if(empty($lastName)){
            $err['errLastName'] = "Last name is required.";
        }
        else if(!preg_match($this->nameRegex, $lastName)){
            $err['errFormatLastName'] = "Wrong format. E.g. West";
        }
        else{
            $rightval['lastName'] = $lastName;
        }

        if(empty($country)){
            $err['errCountry'] = "Country is required.";
        }
        else if(!preg_match($this->nameRegex, $country)){
            $err['errFormatCountry'] = "Wrong format. E.g. California";
        }
        else{
            $rightval['country'] = $country;
        }

        if(empty($city)){
            $err['errCity'] = "City is required.";
        }
        else if(!preg_match($this->nameRegex, $city)){
            $err['errFormatCity'] = "Wrong format. E.g. New York";
        }
        else{
            $rightval['city'] = $city;
        }

        if(empty($address)){
            $err['errAddress'] = "Address is required.";
        }
        else if(!preg_match($this->addressRegex, $address)){
            $err['errFormatAddress'] = "Wrong format. E.g. Washington Street";
        }
        else{
            $rightval['address'] = $address;
        }

        if(empty($phone)){
            $err['errPhone'] = "Phone is required.";
        }
        else if(!preg_match($this->phoneRegex, $phone)){
            $err['errFormatPhone'] = "Wrong format. E.g. 06X/XXX-XXX(X)";
        }
        else{
            $rightval['phone'] = $phone;
        }

        if(empty($email)){
            $err['errEmail'] = "Email is required.";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err['errFormatEmail'] = "Wrong format. E.g. jackwest@gmail.com";
        }
        else{
            $rightval['email'] = $email;
        }

        if(empty($password)){
            $err['errPassword'] = "Password is required.";
        }
        else if(!preg_match($this->passRegex, $password)){
            $err['errFormatPassword'] = "The password consists of letters, numbers and special characters _. -";
        }
        else{
            $rightval['password'] = $password;
        }


        if(count($err)==0) {
            $this->modelLogin = new Login();
            $update = $this->modelLogin->editUser($id, $firstName, $lastName, $country, $city, $address, $phone, $email, $password, $role);

            if($update){
                return redirect()->route('userEdit', ['id'=>$id])->with('succ', 'User successfully updated.');
            }
        }
        else{
            //dd($err);
            return redirect()->route('userEdit', ['id'=>$id])->with('err', $err);
        }
    }

    function getOrders(Request $request){
        $this->modelOrder = new Order();

        if($request->ajax()){
            $id = $request->get('id');
            $products = $this->modelOrder->getOrdersWithProducts($id);

            return response()->json($products);
        }
        else{
            $this->dataAdmin['orders'] = $this->modelOrder->getAllOrders();

            return view('pages.admin.admin-orders', $this->dataAdmin);
        }
    }
}
