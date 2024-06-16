<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
	//
	//

	public function register(Request $request){
	 $form_value = $request->validate([
         'name'=>['required','min:3'],
  	 
  	 'email' => ['required','email'],
         'password'=>['required','min:3']
]);
	User::create($form_value);
  return  "hello rrrr";
 } //end register function

public function login(Request $request){

	$form  = $request->validate([
    	     'email'=>['required','email'],
   	     'password'=>['required']
       ]);

	if(Auth::attempt($form)){
 	  $request->session()->regenerate();
 
            return   view('User.home');
        }
}




} //end class
