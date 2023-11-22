<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_name' => '和室（1名様）',
            'imitation' => '1',
        ];
        DB::table('masters')->insert($param);
        
        $param = [
            'room_name' => '和室（2名様）',
            'imitation' => '3',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'room_name' => '和室（5名様）',
            'imitation' => '5',
        ];
        DB::table('masters')->insert($param);
    }
}
