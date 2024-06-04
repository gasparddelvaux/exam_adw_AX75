<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.service');
    }
    public function geometry()
    {
        return view('pages.geometry');
    }
    public function accessories()
    {
        return view('pages.accessories');
    }
    public function dumper()
    {
        return view('pages.dumper');
    }
    public function conditions()
    {
        return view('pages.conditions');
    }
}
