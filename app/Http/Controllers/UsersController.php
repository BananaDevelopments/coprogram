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
        $input = array(
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password'))
        );
        
        $user = new \App\User;
        
        $user->fill($input);
        $user->save();
        
        if(Auth::attempt(array(
                                'email' => Input::get('email'),
                                'password' => Input::get('password')
           ))) {
            echo 'Logged';
        } else {
            echo 'Failed';
        }
     }
     
    public function edit($id) {
        $user = \App\User::find($id);
                        
        return view('user.edit', array('user' => $user, 'id' => $id));
    }
    
    public function update($id) {
        $input = array(
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password'))
        );
        
        $user = \App\User::find($id);
        
        $user->fill($input);
        $user->save();
        
        echo 'Ok!';
     }
     
     public function show($id) {
         $user = \App\User::find($id);
         
         return view('user.show', array('user' => $user));
     }
}
