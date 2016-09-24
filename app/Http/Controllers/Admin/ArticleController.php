<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
     public function index(){
        echo '<h1>index</h1>';
     }

     public function store(){
         echo '<h1>store</h1>';
     }
}
