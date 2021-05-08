<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function index(){
        return view('site.costumers');
    }
}
