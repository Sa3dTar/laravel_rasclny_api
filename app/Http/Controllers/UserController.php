<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update($id, Request $request){
        $user = User::find($id);

        if(!$user){

            echo "the user is not found";

        }

        $validate = $request->validate([
            'name' =>'required| string| min:4',
            'username' =>'required| string | min:4',
            'email' =>'required| string| min:8',
            'password' =>'required| string| min:8',
            'address' => 'required| string | min:9',
            'type' => "required | string | min:4"
        ]);

        $user->update($validate);

        return response($user , 200, ['updated successfully']);
    }

    public function show($id){
        $user = User::find($id);

        return response($user, 200,['the data has displayed successfully']);

    }
}
