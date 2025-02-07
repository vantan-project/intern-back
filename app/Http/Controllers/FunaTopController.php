<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunaTopController extends Controller
{
    public function index()
    {
        return view('funa.top.index');
    }
}
