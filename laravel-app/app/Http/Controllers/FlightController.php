<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // Flight::withTrashed()->find(6)->restore();
       // foreach (Flight::all() as $flight) {
           //     echo $flight->name;
           //     echo '<br>';
           // }
        // $flights = Flight::where('state', 0)
        //        ->orderBy('name')
        //        ->take(10)
        //        ->get();
        // echo $flights;
        // $flight = Flight::where('name', 'mehmet')->first();
        // $flights = Flight::where('state', '1')->get();
        
        //echo $flights;
        
        // $flights = $flights->reject(function ($flight) {
            //     var_dump($flight->cancelled);
            //     return $flight->cancelled;
            // });
            
            // Flight::where('state', true)
            //     ->chunkById(2, function ($flights) {
                //         $flights->each->update(['state' => false]);
                // }, $column = 'state');
                
                // $flight = Flight::find(5);
                // $flight = Flight::where('state',true)->first();
                // $flight = Flight::where('state', '=', 1)->firstOrFail();
                // $count = Flight::where('state', 0)->count();
                
                // $flight = Flight::find(6);
                // print_r($flight);
                // $flight->delete();
                // print_r("------");
                // var_dump($flight);
                
        //Flight::withTrashed()->find(4)->restore();
        // Flight::withTrashed()
            // ->where('airline_id', 1)
            // ->restore();

        //Flight::withTrashed()->restore();
    

        //Flight::destroy(collect([4, 5, 6]));
        foreach (Flight::all() as $flight) {
            echo $flight->name;
            echo '<br>';
        }
        echo "-----";
        $flights = Flight::withTrashed()
                ->where('state', 0)
                ->get();
        foreach ( $flights as $flight) {
            echo $flight;
            echo '<br>';
        }
        

        //print_r($flight);
        // $user = Flight::create([
        //     'name' => 'Taylor',
        //     'state' => true,
        // ]);
        //print_r($user);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
