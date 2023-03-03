<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function __construct(){
        // echo 'khoi dong';
        return 'Khởi động menu';
    }
    public function index(){
        return view('admin.menu.index');
    }
}
