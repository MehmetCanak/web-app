<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Database\QueryException;
use App\Http\Requests\Api\LoginUser;
use App\Libraries\UserLibrary;  
use App\Models\User;   


//use \App\Http\Requests\StorePostRequest  $request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(LoginUser $request)
    {
        $validated = $request->validated();
        //$input = $request->all('email');
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = new UserLibrary();
        $token = $user->login($email, $password);
        if($token == FALSE)
               return "mail.or.password.incorrect";


        return ResponseBaseHelper("ResponseSuccess",['token' => $token]);
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
