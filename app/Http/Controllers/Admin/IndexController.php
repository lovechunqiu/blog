<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function login(){
        session(['admin' => 123456]);
        return '登陆';
    }
}
