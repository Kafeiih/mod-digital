<?php

namespace App\Http\Controllers;

use App\Model\Digital;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $data = Digital::all();
        return view('index');
    }

    public function digital()
    {
        //
        $data = Digital::all();
        return view('digital.index', compact('data'));
    }
}
