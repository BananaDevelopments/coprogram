<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\DomCrawler\Form;
use App\Http\Requests;

class AuthController extends Controller
{
    public function login(Request $request) {
        $input = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        
       if(Auth::attempt($input)) {
            echo 'Logged';
        } else {
            echo 'Failed';
        }
    }
}
