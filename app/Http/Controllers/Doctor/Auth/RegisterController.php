<?php

namespace App\Http\Controllers\Doctor\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRegister;
// use Illuminate\Support\Facades\View;


class RegisterController extends Controller
{
    public function register()
    {
        if(\View::exists('doctor.auth.register'))
        {
            return view('doctor.auth.register');
        }

        abort(403);

        // abort(Response::HTTP_NOT_ACCEPTABLE);

    }

    public function processRegister(DoctorRegister $request){
        
        // return $request->except('_token');
        // return $request->except(['_token','email']);
        // return $request->only(['_token','email']);
       return $request->validated();
    }




}
