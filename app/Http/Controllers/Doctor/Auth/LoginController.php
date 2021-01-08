<?php

namespace App\Http\Controllers\Doctor\Auth;

// use Facades\App\Helper\Helper;
use App\Helper\Helper;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $creddentials = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        //Login using mobile/phone number
        $doctor = Doctor::where('phone',$request->phone)->first();

        if (Auth::login($doctor)){
            return
        }


        //Login by attempt method using email/name and password
        if (Auth::guard('doctor')->attempt($creddentials)){

            if(isDoctorActive($request->email)){
                    return "active";
                }
                return "inactive";
        }


    }

    protected function test()
{
    return "ok";
}

}
