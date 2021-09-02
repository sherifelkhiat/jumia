<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();

        DB::table('countries')->insert([ 
            'code' => '237',
            'country' =>	'Cameroon'
        ]);

        DB::table('countries')->insert([ 
            'code' => '251', 
            'country' => 'Ethiopia'
        ]);

        DB::table('countries')->insert([ 
            'code' => '212', 
            'country' => 'Morocco'
        ]);

        DB::table('countries')->insert([ 
            'code' => '258', 
            'country' => 'Mozambique'
        ]);

        DB::table('countries')->insert([ 
            'code' => '256', 
            'country' => 'Uganda'
        ]);
    }
}
