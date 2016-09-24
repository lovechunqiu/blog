<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    public function index(){
        $name = '参数学习';
        $kouh = '口号';
        $data = array(
            'name'   => $name,
            'kouhao' => $kouh,
            'score' => 70,
            'num'   => 5,
            'article' => array(
                'news1',
                'news2',
                'news3'
            ),
        );

        $title = '新闻标题';

        //return view('my_laravel', $data);
        //return view('my_laravel')->with($data);
        return view('my_laravel', compact('data', 'title'));
    }
}
