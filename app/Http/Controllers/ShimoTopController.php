<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShimoTopController extends Controller
{
    public function index(){
        return view("shimo.top.index");
    }
}
