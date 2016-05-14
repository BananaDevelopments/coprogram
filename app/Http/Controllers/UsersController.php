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
    
    public function store(Requests\CreateUserRequest $request) {
        \App\User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        if(Auth::attempt(array(
            'email' => $request->email,
            'password' => $request->password
           ))) {
           return redirect(action('IndexController@index'));
        } else {
           return \Illuminate\Support\Facades\Redirect::back()->withInput(Input::only('email'));
        }
    }
     
    public function edit($id) {
        $user = \App\User::find($id);
                        
        return view('user.edit', array('user' => $user, 'id' => $id));
    }
    
    public function update($id, Requests\UpdateUserRequest $request) {
        $input = array(
            'email' => $request->email,
            'password' => bcrypt($request->password)
        );
        
        $user = \App\User::find($id);
        
        $user->fill($input);
        $user->save();
        
        return view('user.show', array('user' => $user));
     }
     
     public function show($id) {
         $user = \App\User::find($id);
         
         return view('user.show', array('user' => $user));
     }
}
