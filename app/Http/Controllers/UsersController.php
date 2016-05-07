<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Symfony\Component\DomCrawler\Form;
use Illuminate\Support\Facades\Auth; 

class UsersController extends Controller
{
    public function create() {
        return view('user.create');
    }
    
    public function store() {
        $input = Input::only(['email', 'password']);
        $user = new \App\User;
        
        $user->fill($input);
        $user->save();
        /*
        if(Auth::attempt($input)) {
            echo 'Logged';
        } else {
            echo 'Failed';
        }*/
    }
}
