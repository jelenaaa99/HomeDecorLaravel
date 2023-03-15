<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends BasicController
{
    public $modelRegister;

    function index(){
        return view('pages.register', $this->data);
    }

    function registerUser(Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $country = $request->input('country');
        $city = $request->input('city');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');

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

            try {
            $this->modelRegister = new Register();
            $insert = $this->modelRegister->insertUser($firstName, $lastName, $country, $city, $address, $phone, $email, $password);

            if($insert){
                return redirect()->route('register')->with('success', 'Registration successful.');
            }
            }catch(\Exception $ex) {
                if ($ex->getCode() == 23000) {
                    return redirect()->route('register')->with('errUnique', 'The registered mail already exists.');
                }
                return redirect()->route('register')->with('dbError', 'Server error. Try later.');
            }
        }
        else{
            return redirect()->route('register')->with('err', $err)->with('rightval', $rightval);
        }
    }
}
