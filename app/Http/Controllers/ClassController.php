<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClassController extends Controller
{
    
    public function getList()
    {
        return view('class.list', ['data' => 'hello']);
    }

}
