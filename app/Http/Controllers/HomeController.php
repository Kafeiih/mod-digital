<?php

namespace App\Http\Controllers;

use App\Model\Digital;
use App\Model\Formato;
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
        $data = Digital::with('Formato')->get();
        return view('digital.index', compact('data'));
    }
}
