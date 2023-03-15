<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\ExpectationFailedException;

class LoginController extends BasicController
{
    public $modelLogin;

    function index(){
        return view('pages.login', $this->data);
    }

    function loginUser(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        $err = [];
        $rightval = [];

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

        if(count($err)==0){

            try{
                $this->modelLogin = new Login();
                $user = $this->modelLogin->userLogin($email, md5($password));
                if($user){
                    $request->session()->put("user", $user);
                    return redirect()->route('home');
                }
                else{
                    return redirect()->route('login')->with('noUser', 'No user with these credentials.');
                }

            }catch(\Exception $ex){
                return $ex->getMessage();
            }
        }
        else{
            return redirect()->route('login')->with('err', $err)->with('rightval', $rightval);
        }
    }

    function logout(Request $request) {
        try {
            $request->session()->forget("user");

            return redirect()->route("login");

        }catch(\Exception $e) {
            $guid = uniqid();
            Log::error( $guid . " " . $e->getMessage());
            return view("error",
                ["errorId" => $guid]);
        }
    }
}
