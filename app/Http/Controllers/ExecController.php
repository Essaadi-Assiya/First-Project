<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecController extends Controller
{
    
    public function show(Request $request)
   {
      var_dump($request-> text );
      
   }
}
