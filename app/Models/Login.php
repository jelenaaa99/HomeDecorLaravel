<?php

namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login
{
    function userLogin($email, $password){
        return DB::table('users')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
    }

    function getUsers(){
        return DB::table('users as u')
            ->select('u.*', 'r.id as roleId', 'r.title as title')
            ->join('role as r', 'u.role_id', '=', 'r.id')
            ->get();
    }

    function getUserById($id){
        return DB::table('users')
            ->where('id', '=', $id)
            ->first();
    }

    function getRole(){
        return DB::table('role')
            ->get();
    }

    function editUser($id, $firstName, $lastName, $country, $city, $address, $phone, $email, $password, $role){
        return DB::table('users')
            ->where('id', '=', $id)
            ->update([
                'first_name'=>$firstName,
                'last_name'=>$lastName,
                'email'=>$email,
                'password'=>$password,
                'country'=>$country,
                'city'=>$city,
                'address'=>$address,
                'phone'=>$phone,
                'role_id'=>$role
            ]);
    }

}
