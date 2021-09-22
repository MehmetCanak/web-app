<?php

namespace App\Libraries;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \Carbon\Carbon;
use DB;
use Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UserLibrary
{

    use UserLibraryTrait;

    public function login($email, $password){

        $user = User::where('state', TRUE)->where('email', $email)->first();
        if($user == NULL) return FALSE;
            
        if(!Hash::check($password, $user->password)) return FALSE;

        $user=$this->DeployUserToken($user);
        $token = $this->CreateUserToken($user);
        return $token;

            
    }

    public function CreateUserToken($user){
        
        $tokens = [];

        $tokens = $user->tokens;
        $token = Str::random(10).'m'.$user->id;
        $temp =
        [
            'token' => $token,
            'time' => strtotime(date('Y-m-d H:i:s')),
            'clientInfo' => $this->ReadFromResponseData('clientInfo')
        ];

        if($tokens == NULL) $tokens = [];
        array_push($tokens, $temp);

        $user->tokens = $tokens;
        $user->save();

        return $token;

    }
    public function DeployUserToken($user){

        $tokens = [];

        if($user == NULL) return $user;
        if(gettype($user->tokens) != 'array') $user->tokens = [];

        if($user->tokens != NULL)
            foreach($user->tokens as $i => $token)
            {
                if(!is_array($token)) continue;

                $temp = date('Y-m-d H:i:s', $token['time']);
                $token_time = new Carbon($temp);
                $interval = $token_time->diffInDays(Carbon::now());
                if($interval > 5) continue;

                array_push($tokens, $token);
            }

        $user->tokens = $tokens;

        DB::table('users')->where('id', $user->id)->update(['tokens' => $user->tokens]);

        return $user;

    }
    public function ReadFromResponseData($key){
        $info = Request::input($key);
        return $info;

    }


}