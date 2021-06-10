<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    function media(float $n1, float $n2){
        $media = ($n1 + $n2) / 2;
        
        return view('media', compact('n1', 'n2', 'media'));
    }
}
