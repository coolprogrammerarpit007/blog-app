<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUserName()
    {
        return 'The Great Arpit Mishra';
    }

    function newUserName($name)
    {
        return 'HII ' . $name;
    }

    public function adminLogin()
    {
        if(View::exists('adminLogin')){
            return view('adminLogin');
        }else{
            echo "NO PAGE FOUND";
        }
    }
}
