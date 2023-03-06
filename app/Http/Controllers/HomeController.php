<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Controllers\DateTime;
use Carbon\Carbon;
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
            // dd($allData); 
            $data = new Users();
            $data['name'] =$allData['name_user'];
            $data['email'] =$allData['mail_user'];
            $data['password'] ='123123123';
            
            // dd($data); 
            $checked = $data->save();
            if ($checked) {
                return redirect()->route('/')->with('success', 'Thêm thành công');
            } else {
                return redirect()->route('/')->with('error', 'Thêm thất bại');
            }
        }else{
            return 'Chưa nhập name_user';
        }

    }
}
