<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function observers(){
        // echo "hello";
        $user=User::create([
            'name'=>'ANUJ',
            'email'=>'qqqwwww@g.c',
            'password'=>'12345678',
        ]);
        dd($user);
    }
}
