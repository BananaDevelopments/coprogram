<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(Requests\AdminRequest $request) {
        return view('admin.index');
    }
}
