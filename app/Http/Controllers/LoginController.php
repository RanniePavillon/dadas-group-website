<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        // return $request;
        $getUserName = DB::table('tbl_temp_user')->where('username',$request['username'])->get();
        $getUserPassword = DB::table('tbl_temp_user')->where('password',$request['password'])->get();
       
        
        
            if (count($getUserName) > 0 && count($getUserPassword) > 0) {
                    return 'Success.';
                }
            elseif (count($getUserName) == 0 && count($getUserPassword) == 0) {
                    return 'Please input username or password.';
            }
            else{
                    return 'Failed.';
            }
    }
   
}
