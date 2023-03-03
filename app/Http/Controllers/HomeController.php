<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class HomeController extends Controller
{
    //Acction index
    public function index(){

        $user= new Users();
        $userList= $user->getAllUser();


        return view('home',compact('userList'));

    }
    public function getNews(){
        return 'Danh sach tin tuc';
    }
    //thêm mới (POST)
    public function addUsers(Request $request){

        return view('home');
    }
    public function handleAddUser(Request $request){
        // return 'Submit thêm chuyên mục';
        // return redirect(route('category.add'));
        $allData = $request->all();
        if($allData['name_user']!==null&&$allData['mail_user']!==null){
            dd($allData); 
        }else{
            return 'Chưa nhập name_user';
        }

    }
}
