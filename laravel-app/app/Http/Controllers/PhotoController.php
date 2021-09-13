<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $uri = $request->path();
//         print_r($uri);
//         if ($request->is('api/admin/*')) {
//            print_r("evet");
//         }
//         print_r("------");
//         if ($request->routeIs('api.admin.*')) {
//             print_r("evettttt");
//         }
//         $urlWithQueryString = $request->fullUrl();
//         print_r($urlWithQueryString." ----");

// ///----------------------------------------

//         $method = $request->method();

//         if ($request->isMethod('get')) {
//             print_r($method);
//             print_r("evet");
//         }
        // $value = $request->header();

        // //print_r($value);
        // print_r("--------");
        // $value = $request->header('X-Header-Name', 'default');
        // print_r($value);
        // print_r("--------");
        // $ipAddress = $request->ip();
        // print_r($ipAddress);
        // print_r("--------");
        // $contentTypes = $request->getAcceptableContentTypes();
        // print_r($contentTypes);
        // print_r("--------");
        // if ($request->accepts(['text/html', 'application/json'])) {
        //     print_r($request->accepts(['text/html', 'application/json']));
        //     print_r("evet");
            
        // }

        // $preferred = $request->prefers(['text/html', 'application/json']);
        // print_r($preferred);
        // print_r("--------");
        // if ($request->expectsJson()) {
        //     print_r("evet");
        // }
        // $input = $request->all(); //butün request inpulerını döndürür
        // print_r($input);
       // print_r("--------");
        // $name = $request->input('name');
        // $name = $request->input('name', 'Sally'); //request name özelliği gelmezsee diğerini name ata
        // $input = $request->input();
        ///-----------------------------------------
        // $name = $request->query('name');
        // print_r($name);
        // print_r("--------");
        
        // $query = $request->query();
        // print_r($query);
        print_r("-aa");
        
        $name = $request->input('user');

        print_r($name);

        //--------------------------
        if ($request->has('name')) {
            print_r("true");
        }
        if ($request->has(['name', 'email'])) {
            print_r("-----true2");
        }
        print_r("-----");
        $path = $request->path();
        print_r($path);
        
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);

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
