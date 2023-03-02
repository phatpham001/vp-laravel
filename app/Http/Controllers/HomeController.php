<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Acction index
    public function index(){
        return view('home');
    }
    public function getNews(){
        return 'Danh sach tin tuc';
    }
}
