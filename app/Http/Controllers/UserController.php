<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        return "ahora hola mundo desde el index principal";
    }

    public function user(Request $request){
        dd("aui");
    }
    public function register(UserRegisterRequest $request){

        User::create(
            [
                'name'=> $request->name,
                'last_name'=> $request->last_name,
                'email'=> Hash::make( $request->email),
                'password'=>Hash::make( $request->password),
            ]
        );
        return 'User created successfully!';
        return( $request->user());
    }
}
