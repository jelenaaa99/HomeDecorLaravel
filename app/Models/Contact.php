<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Contact
{
    function insertMessage($name, $email, $phone, $msg){
        return DB::table('messages')->insert([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'msg'=>$msg
        ]);
    }

    function getMessage(){
        return DB::table('messages')
            ->orderBy('date', 'desc')
            ->get();
    }

    function deleteMessage($id){
        return DB::table('messages')
            ->delete($id);
    }
}
