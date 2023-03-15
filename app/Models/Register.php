<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Register
{

    function insertUser($firstName, $lastName, $country, $city, $address, $phone, $email, $password){
        return DB::table('users')
            ->insert([
                'first_name'=>$firstName,
                'last_name'=>$lastName,
                'email'=>$email,
                'password'=>md5($password),
                'country'=>$country,
                'city'=>$city,
                'address'=>$address,
                'phone'=>$phone,
                'role_id'=>2
            ]);
    }
}
