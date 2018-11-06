<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
                'country_code' => '0086',
                'country_name_tc' => '中國',
                'country_name_en' => 'China',
                'country_name_sc' => '中国'
            ],[
                'country_code' => '0852',
                'country_name_tc' => '香港',
                'country_name_en' => 'Hong Kong',
                'country_name_sc' => '香港'
            ],[
                'country_code' => '0044',
                'country_name_tc' => '英國',
                'country_name_en' => 'United Kingdom',
                'country_name_sc' => '英国'
            ],[
                'country_code' => '0001',
                'country_name_tc' => '美國',
                'country_name_en' => 'U.S.A.',
                'country_name_sc' => '美国'
            ]);

        DB::table('country')->insert($data);
    }
}
