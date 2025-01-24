<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RukaController extends Controller
{
    public function index()
    {
        return view("ruka.top.index");
    }
}
