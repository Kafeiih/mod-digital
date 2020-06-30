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
        return view('principal.index');
    }

    public function digital()
    {
        //
        $data = Digital::where('estado', 1)->with([
            'formato' => function ($query) {
                $query->select('id', 'url');
            }
        ])->get(['id','name','url','formato_id']);
        
        return view('digital.index', compact('data'));
    }

    public function consentimiento()
    {
        //
        return view('principal.pagina');
    }
}
