<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){

    }
    public function index(){
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
    public function addCategory(){
        return view('client.categories.add');
    }
    public function handleAddCategory(){
        return 'Submit thêm chuyên mục';
    }
    //Delete (DELETE)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục';
    }
    
}
