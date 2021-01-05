<?php

namespace App\Http\Controllers\Doctor\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
