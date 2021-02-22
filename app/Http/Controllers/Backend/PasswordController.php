<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function edit(){
    	return view('backend.passwords.edit');
    }

    public function update(Request $request){
    	$this->validate($request, [
    		'current_password' => 'required',
    		'password' => 'required|confirmed|min:8',
    		'password_confirmation' => 'required'
    	]);

    	$user = Auth::user();   	
    	$hashedPassword = $user->password;

    	if(Hash::check($request->current_password, $hashedPassword)){
    		if(Hash::check($request->password, $hashedPassword)){
    			return redirect()->route('app.password.edit');
    		}else{
    			$user->update([
    				'password' => Hash::make($request->password)
    			]);

    			Auth::logout();

    			// return redirect()->route('/');
    		}
    	}
    }
}
