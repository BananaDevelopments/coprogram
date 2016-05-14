<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUsersController extends Controller
{
    public function index() {
        $users = \App\User::all();

        return view('admin.users.index', array('users' => $users));
    }
    
    public function edit($id) {
        $user = \App\User::find($id);

        return view('admin.users.edit', array('user' => $user));
    }
    
    public function update($id, Requests\AdminUsersUpdateRequest $request) {
        $input = array(
            'email' => $request->email,
            'is_admin' => $request->is_admin
        );
        
        $user = \App\User::find($id);
        
        $user->fill($input);
        $user->save();
        
        return redirect(action('AdminUsersController@index'));
     }
     
    public function destroy($id) {

        $user = \App\User::find($id);
        
        $user->delete();
        
        return redirect(action('AdminUsersController@index'));
     }
     
    public function create() {
        return view('admin.users.create');
    }
    
    public function store(Requests\AdminUsersCreateRequest $request) {
        \App\User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin
        ]);
        
        return redirect(action('AdminUsersController@index'));
    }
}
