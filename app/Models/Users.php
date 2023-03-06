<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Users extends Model
{
    public function getAllUser(){
        
        $user=DB::select('SELECT * FROM users');
        return $user;
    }
    public function insertUser($name,$mail){
        
        // $user=DB::select(');
        $user=DB::insert('insert into users (name, email) values (?, ?)', [$name, $mail]);
        return $user;
    }
}
