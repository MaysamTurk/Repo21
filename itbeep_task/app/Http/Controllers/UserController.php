<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $user = new User();
       $users = $user->all();
       return view('form', compact('users'));
   }

   public function create(){
       return view('form');
   }

   public function store(Request $request){
     $request->validate([
           'name'    => 'required',
           'mobile' => 'required | min:10 | max:10',
           'email' => 'required | email',
       ]);

       $user = new User();
       $user->name   = $request['name'];
       $user->mobile = $request['mobile'];
       $user->email = $request['email'];

       $user->save();


    return redirect('form');


}
}
