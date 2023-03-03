<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
 
use Illuminate\Routing\Controller;

class ScondController extends Controller
{

 
    public function _construct()
    {
        
        $this-> middleware ('auth');
        
    }

    public function show0()
    {
        return " static  string0";
        
    }
    public function show1()
    {
        return " static  string1";
        
    }
    public function show2()
    {
        return " static  string2";
        
    }
    public function show3()
    {
        return " static  string3";
        
    }
}
