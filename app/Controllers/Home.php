<?php

namespace App\Controllers;

use App\Database\Migrations\Product; 

class Home extends BaseController
{
    public function index()
    {
        return view('v_home');
    }
}
