<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $entrepreneur = 'Zakaria Chtebat';
        return view('test', compact('entrepreneur'));
    }
}