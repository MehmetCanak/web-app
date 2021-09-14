<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Exceptions\ModelNotFoundException;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $user3 = DB::table('users')->find(1);
        $email = DB::table('users')->where('name', 'mehmet')->value('email');
        $usersCount = DB::table('users')->count();
        print_r($user3); print_r("---email-->: "); print_r($email);print_r("---count-->: "); print_r($usersCount);
        return view('users.index', ['users' => $users,'user3'=>$user3,'email'=>$email]);
        //return view('users.index');
    }
    public function search(Request $request)
    {
        // $user = User::find($request->input('user_id'));
        // return view('users.search', compact('user'));
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
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
    public function show(Request $request,$id)
    {
        //$value = $request->session()->get('key');

        //$value = $request->session()->get('key', 'default');

        $value = $request->session()->get('key', function () {
            return 'default';
        });

       // print_r($value);
        //     $data = $request->session()->all();
        //     //print_r("--------");
        //     print_r(json_encode($data));
        //    print_r("--------a");
        //    if ($request->session()->has('users')) {
        //        var_dump($request->session()->has('users'));
        //     }

        // $request->session()->put('key', 'value');
        // $data = $request->session()->all();
        // print_r(json_encode($data));
        // //print_r("--------a");

        //$request->session()->put('key', 'value');
        // session(['key' => 'value123']);
        // $data = $request->session()->all();
        // print_r(json_encode($data));
        // //print_r("--------a");


        // $request->session()->push('user.teams', 'developers');
        // $data = $request->session()->all();
        // print_r(json_encode($data));
        // //print_r("--------a");

        // $data = $request->session()->pull('key', 'default');
        // print_r(json_encode($data));
        // //print_r("--------a");

        //$request->session()->flash('status', 'Task was successful!');
        //$request->session()->put('key', 'value');
        //$request->session()->push('user.teams', 'developers');
        //$value = $request->session()->pull('user.teams', 'default');
        //$data1=$request->session()->increment('count');
        $data = $request->session()->all();
        //$request->session()->increment('count', $incrementBy = 2);
        //$request->session()->reflash();
        //$request->session()->keep(['username', 'email']);   
        //$request->session()->now('status', 'Task was successful!');
        $request->session()->put('name', 'mehmet');
        //$request->session()->forget(['name', 'status']);  // 
        //$request->session()->flush();    //bütün sseionları siler
        //$request->session()->regenerate();  //yeni token veriyor
        //$request->session()->invalidate();  // sessinları kaldırıyor yeni token veriyor
        print_r(json_encode($data));
        //$request->session()->decrement('count');
        //print_r($data1);
        //print_r("--------a");
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
        //
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
