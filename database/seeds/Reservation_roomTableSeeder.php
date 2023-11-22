<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reservation_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_id' => '1',
            'room_id' => '1',
            'day' => '2',
            'price' => '8000',
        ];
        DB::table('reservation_room')->insert($param);
    }
}
