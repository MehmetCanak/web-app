<?php

namespace App\Libraries;

use App\Models\User;


class UserLibrary
{

    use UserLibraryTrait;

    public function login($email, $password){

        $user = User::where('state', TRUE)->where('email', $email)->first();
        if($user == NULL)
        {
            $user = User::where('state', TRUE)->where('tc', $email)->first();
            if($user == NULL) return FALSE;
        }
            
        if(!Hash::check($password, $user->password)) return FALSE;
            
        $user = helper('clear_user_token', $user);
        $token = helper('create_user_token', $user);
            
        return $token;
    }


}