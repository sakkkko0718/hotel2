<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'guest_id' => '1',
            'people' => '1',
            'checkin' => '2023-11-22',
            'checkout' => '2023-11-23',
        ];
        DB::table('reservations')->insert($param);
    }
}
