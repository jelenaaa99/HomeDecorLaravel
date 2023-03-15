<?php

namespace App\Http\Controllers;

use App\Models\Products;
use http\Env\Response;
use Illuminate\Http\Request;

class CartController extends BasicController
{
    public $modelProduct;

    function index(Request $request){

        if($request->ajax()){
            $result = $cart = $request->session()->get("cart");

            return response()->json($result);
        }
        else{
            $cart = $request->session()->get("cart");

            if(!$cart) {
                $cart = [];
            }

            $this->data['cartItems']=$cart;
            return view("pages.cart", $this->data);
        }
    }

    function putInCart(Request $request){
        try {
            $productId = $request->get("id");

            if(!$request->session()->has("cart")) {
                $request->session()->put("cart", []);
            }

            $this->modelProduct= new Products();
            $product = $this->modelProduct->getSingleProduct($productId);
            $cart = $request->session()->get("cart");

            if(isset($cart[$productId])) {
                $alreadyInCart = $cart[$productId];
                $alreadyInCart->quantity++;
                $cart[$productId] = $alreadyInCart;
            } else {
                $item = new \stdClass();
                $item->productId = $productId;
                $item->quantity = 1;
                $item->price = $product->price;
                $item->image = $product->img;
                $item->name = $product->name;
                if($product->admin_img==1){
                    $item->admin_img = 1;
                }
                else{
                    $item->admin_img = 0;
                }

                $cart[$productId] = $item;
            }

            $request->session()->put("cart", $cart);

            $result = $request->session()->get('cart');
            //$request->session()->forget('cart');

            return response()->json($result);

        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }


    public  function remove($id, Request  $request) {

        $cart = $request->session()->get("cart");
        if(isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put("cart", $cart);
        }

        $result = $request->session()->get('cart');

        $this->data['cartItems']=$cart;
        return view("pages.cart", $this->data);
    }
}
