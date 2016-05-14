<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = \Illuminate\Support\Facades\Input::get('id');
        
        return [
            'email' => 'required|email|unique:users,id,' . $id,
            'password' => 'required|min:2',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
