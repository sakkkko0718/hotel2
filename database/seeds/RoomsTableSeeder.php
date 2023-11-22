<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'master_id' => '1',
            'room_num' => 'あの間',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'master_id' => '1',
            'room_num' => 'いの間',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'master_id' => '1',
            'room_num' => 'うの間',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'master_id' => '2',
            'room_num' => 'えの間',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'master_id' => '3',
            'room_num' => 'おの間',
        ];
        DB::table('rooms')->insert($param);
    }
}
