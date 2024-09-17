<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
