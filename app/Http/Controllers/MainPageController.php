<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
   public function showuser($cuser='adiee'){

       $user = array('name' => 'adil' ,'qualification' => 'MS Software Engineering', 'current user' =>$cuser ); 
       return view('user',['user'=>$user]);
   }
}
