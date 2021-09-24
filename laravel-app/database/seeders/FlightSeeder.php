<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Carbon\Carbon;


class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $current = Carbon::now();
        $array = [0,1];
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            $random = Arr::random($array);
            DB::table('flights')->insert([
                'name' => Str::random(5),
                'state' => $random,
                'created_at' => $current->addDays($i),  
                'updated_at' => $current->addHours($i),  
            ]);
            $current->subHour();
        }
    }
}
