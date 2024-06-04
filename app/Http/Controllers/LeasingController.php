<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeasingController extends Controller
{
    public function index()
    {
        return view('pages.leasing');
    }
}
