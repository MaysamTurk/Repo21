<?php

namespace App\Http\Controllers;
use App\Service;
use App\Interest;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $service= new Service();
       $services = $service->all();
       return view('form', compact('services'));
   }

}
