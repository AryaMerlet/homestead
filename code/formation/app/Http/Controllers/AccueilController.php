<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
    public function _construct(){
        
    }
    //
    public function index(){
        return view('Welcome');
    }
}
