<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        // $allData = $request->all();
        // echo $request->all()['id'];
        // dd($allData); 

        $path=$request->path();
        echo 'Path: '. $path;


        return view('client.categories.categories');
    }
    //lấy ra (GET)
    public function getCategory($id){
        return view('client.categories.edit');
    }
    //update (POST)
    public function updateCategory($id){
        return 'submit sửa chuyên muc '.$id;
    }
    //thêm mới (POST)
    public function addCategory(Request $request){

        $path=$request->path();
        echo 'Path: '. $path;

        return view('client.categories.add');
    }
    public function handleAddCategory(Request $request){
        // return 'Submit thêm chuyên mục';
        // return redirect(route('category.add'));
        $allData = $request->all();
        if($allData['category_name']!==null){
            dd($allData); 
        }else{
            return 'Chưa nhập category_name';
        }

    }
    //Delete (DELETE)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục';
    }
    
}
