<?php

namespace App\Http\Controllers\front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class userController extends BaseController
{
    public function showAdminName()
    {
        $data=[];
        $data['id']=5;
        $data['name']='ahmad ';


        $obj =new \StdClass();
        $obj -> name='AHMAD';
        $obj -> id='6';


        return view ('welcome',compact('obj'));
    }
}
