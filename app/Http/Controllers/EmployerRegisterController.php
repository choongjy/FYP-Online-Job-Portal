<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class EmployerRegisterController extends Controller
{

    public function employerRegister(Request $request){

        $this->validate($request,[
            'cname'=>'required|string|max:60',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|confirmed'
        ]);

    	 $user =  User::create([
            'name' => request('cname'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);
        Company::create([
                'user_id' => $user->id,
                'cname' => request('cname'),
                'slug'=>str::slug(request('cname'))

            ]);
        $user->sendEmailVerificationNotification();

        return redirect()->back()->with('message','A verification link is sent to your email. Please follow the link to verify it');


    }
}
