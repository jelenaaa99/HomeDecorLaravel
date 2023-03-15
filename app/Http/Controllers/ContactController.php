<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends BasicController
{
    public $modelContact;

    function index(){
        return view('pages.contact', $this->data);
    }

    function sendMessage(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $msg = $request->input('msg');
        $err=[];
        $rightval = [];

        if(empty($name)){
            $err['errName'] = "Name is required.";
        }
        else if(!preg_match($this->nameRegex, $name)){
            $err['errFormatName'] = "Wrong format. E.g. Jack West";
        }
        else{
            $rightval['name'] = $name;
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

        if(empty($phone)){
            $err['errPhone']= "Phone is required.";
        }
        else if(!preg_match($this->phoneRegex, $phone)){
            $err['errFormatPhone'] = "Wrong format. E.g. 06X/XXX-XXX(X)";
        }
        else{
            $rightval['phone'] = $phone;
        }

        if(empty($msg)){
            $err['errMsg'] = "Message is required.";
        }
        else{
            $rightval['msg'] = $msg;
        }

        if(count($err)==0){
            //Ovde uraditi insert za message.
            try{
                $this->modelContact = new Contact();
                $insert = $this->modelContact->insertMessage($name, $email, $phone, $msg);

                if($insert){
                    return redirect()->route('contact')->with('success', 'Message sent succesfully.');
                }

            }catch(\Exception $ex){
                return redirect()->route('contact')->with('dbError', 'Server error. Try later.');
            }
        }
        else{
            $this->data['err'] = $err;
            $this->data['rightVal'] = $rightval;
            return view('pages.contact', $this->data);
        }
    }
}
