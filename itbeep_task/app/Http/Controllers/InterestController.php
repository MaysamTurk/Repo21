<?php

namespace App\Http\Controllers;
use App\Interest;

use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index(){
        $interest= new Interest();
       $interests = $interest->all();
       return view('/', compact('interests'));
   }

   public function create(){
       return view('/');
   }

}
