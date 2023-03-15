<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Order
{
    function insertOrder($country, $city, $address, $phone, $user_id){
        return DB::table('order_table')
            ->insert([
                'country'=>$country,
                'city'=>$city,
                'address'=>$address,
                'phone'=>$phone,
                'user_id'=>$user_id
            ]);
    }

    function insertOrderLine($id){
        $cart = session()->get('cart');

        $data = [];

        foreach ($cart as $c){
            array_push($data, [
                'order_id'=>$id,
                'product_id'=>$c->productId,
                'quantity'=>$c->quantity
            ]);
        }
        return DB::table('order_line_table')
            ->insert($data);
    }

    function getAllOrders(){
        return DB::table('order_table as ot')
            ->select('ot.*', 'u.first_name', 'u.last_name', )
            ->join('users as u', 'ot.user_id', '=', 'u.id')
            ->get();
    }

    function getOrdersWithProducts($id){
        return DB::table('order_table as ot')
            ->select('p.*', 'olt.quantity')
            ->join('order_line_table as olt', 'ot.id', '=', 'olt.order_id')
            ->join('products as p', 'olt.product_id', '=', 'p.id')
            ->where('olt.order_id', '=', $id)
            ->get();
    }
}
