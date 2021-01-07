<?php

namespace App\Http\Controllers\Doctor\Auth;

// use Facades\App\Helper\Helper;
use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login()
    {
        if(View::exists('doctor.auth.login'))
        {
            return view('doctor.auth.login');
        }

        abort(403);

    }

    public function processLogin(Request $request){

        return Helper::test();

    }


    
}
