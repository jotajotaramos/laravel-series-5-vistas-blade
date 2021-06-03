<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFirstController extends Controller
{
    public function ourMethod()
    {
    	
    	$ourString = "esta cadena viene del controlador";
    	
        return view("ourFirstView")->with('variableFromController', $ourString);
        
    }
}
