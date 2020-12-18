<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFGenerator extends Controller
{
    public function __construct()
    {

    }

    public function generate_pdf( Request $request ){
        echo "toto";
        return response()->json($request);
    }
}
