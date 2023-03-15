<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Exception;

class OrderController extends BasicController
{
    public $modelOrder;

    function index(Request $request){

        if(!$request->session()->has('user')){
            return redirect()->route('login');
        }
        $cart = $request->session()->get("cart");

        $this->data['cartItems']=$cart;
        return view('pages.order', $this->data);
    }

    function order(Request $request){
        $country = $request->input('country');
        $city = $request->input('city');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $user_id = $request->input('user_id');

        $err = [];
        $rightval = [];

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

        if(count($err)==0) {

            try {
                $this->modelOrder = new Order();
                $insert = $this->modelOrder->insertOrder($country, $city, $address, $phone, $user_id);

                $id_order_line = DB::getPdo()->lastInsertId();

                if($insert){
                    try{
                        $result = $insert_line = $this->modelOrder->insertOrderLine($id_order_line);
                        if($result){
                            $request->session()->forget('cart');
                            return redirect()->route('order')->with('success', 'Your order has been accepted. Expect delivery within 48h.');
                        }
                    }catch(Exception $ex){
                        return $ex->getMessage();
                    }
                }
                else{
                    return redirect()->route('order')->with('dbError', 'Server error. Try later.');
                }

            }catch(\Exception $ex) {
                return $ex->getMessage();
            }
        }
        else{
            return redirect()->route('order')->with('err', $err)->with('rightval', $rightval);
        }
    }

}
