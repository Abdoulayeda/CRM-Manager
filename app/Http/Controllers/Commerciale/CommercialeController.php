<?php

namespace App\Http\Controllers\Commerciale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommercialeController extends Controller
{
    //
    public function index()
    {
        return view('commerciale.index');
    }

    
}
