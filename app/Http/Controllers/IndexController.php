<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Http\Model\User;

class IndexController extends Controller
{
    public function index(){
        //引入数据库
        //$user = DB::table('user')->where('user_id', '1')->get();
        //dd($user);

        //$user = User::where('user_id', 1)->get();
        //dd($user);

        //$user = User::find(1);
        //dd($user);

        $user = User::find(1);
        $user->user_name = '王五';
        $user->update();

        return view('welcome');
    }
    
}
