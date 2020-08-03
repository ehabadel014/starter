<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showAdminView');
    }

    public function showAdminName(){
       return 'ehab adel';
   }
    public function showAdminName2(){
        return 'ehab adel2';
    }
    public function showAdminView(){
        $data=[];
        $data['name']='mohamed';
        $data['id']=5555;


        $obj=new \stdClass();
        $obj->name='haithem';
        $obj->id=44;
        return view('welcome',compact('obj'));
    }
}

