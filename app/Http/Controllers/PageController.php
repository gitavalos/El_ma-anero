<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   /* public function index(){
        $Title = 'Bienvenido Guatemala!';
        return view('pages.index')->with('Title',$Title);
    }

    public function about(){
        return view('pages.About');
    }*/

    public function portal(){
        return view('Pages.portal');
    }
}
